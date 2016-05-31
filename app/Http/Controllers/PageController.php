<?php

namespace App\Http\Controllers;
use App\Article;
use App\Share;
use Carbon\Carbon;
use Validator;
use Auth;
// use Illuminate\Http\Request; //默认的路径不对??
use Illuminate\Support\Facades\Request;  //或者 use Request;
use App\Http\Requests; 
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        // $userObj = Auth::user();
        // dd($userObj);
        // $user = $userObj['name'];

        $model = new Share(); 
        $list = $model->getShareList();
        return view('form.list')->with(['shares' => $list]);
    }

    public function store()
    {
    	/*
    		如果直接使用 Request::all();报错如下
    		Non-static method Illuminate\Http\Request::all() should not be called statically, assuming $this from incompatible context
    		查看源码发现Request类确实没有all这个静态方法；
    		解决方法一：
			store方法 (Request $request);然后 $input = $request->all();其实传参的过程是实例化的过程，而Request是config/app.php中的别名（自己找）
			解决方法二：
			store方法不传参；修改顶部use Illuminate\Http\Request 为use Illuminate\Support\Facades\Request或use Request;
			至于第二种方法详见：http://stackoverflow.com/questions/28413985/laravel-5-illuminate-http-request-has-method-not-allowing-static-call
			
    	*/
    	$input = Request::all();
    	/*
		关于字段的验证
		Validator
    	*/
    	$validator = Validator::make($input, [
		  	'email' => 'required|email',
		  	'share_url' => 'required|url',
		  	'share_desp' => 'required|min:5',
		]);
		if ($validator->fails()) {
            return redirect('page/create')
                        ->withErrors($validator, 'login')
                        ->withInput();
        }
		/*调用Validator实例的messages 方法,得到一个命名为 MessageBag 的实例,该实例里有许多方便的方法
		$messages = $validator->messages();  
		if (!empty($messages->first('email')))
		{
			dd($messages->first('email'));
		}
		if (!empty($messages->first('share_url')))
		{
			dd($messages->first('share_url'));
		}
		if (!empty($messages->first('share_desp')))
		{
			dd($messages->first('share_desp'));
		}
		*/
		

    	/*
    	$input['share_time'] = Carbon::now();
		"share_time": {
			"date": "2016-05-17 16:42:12.000000",
			"timezone_type": 3,
			"timezone": "UTC"
		}
    	*/
    	$input['share_time'] = sprintf("%s", Carbon::now());
    	//"share_time": "2016-05-17 16:42:53"
    	return $input;
    }

    public function create()
    {
    	return view('form.create');
    }

    public function chart()
    {
    	return view('form.chart');
    }
}

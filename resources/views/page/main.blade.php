<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>贡献知识分享成长</title>
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
  	<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
		    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		    </button>
		    <a class="navbar-brand" href="#">Brand</a>
	    </div>
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="active"><a href="./list">文章<span class="sr-only">(current)</span></a></li>
				<li><a href="./create">开始分享</a></li> 
			</ul>
	      	<form class="navbar-form navbar-left" role="search" action="page" method="post">
		        <div class="form-group">
		          <input type="text" name="keyword" class="form-control" placeholder="关键词">
		          <input type="text" name="month" class="form-control" placeholder="月份">
		          <input type="hidden" name="_token" value="{{ csrf_token() }}">
		        </div>
		        <button type="submit" class="btn btn-default">搜索</button>
	      	</form>
		    <ul class="nav navbar-nav navbar-right">
		        <li><a href="./chart">贡献指数</a></li>
		        <li class="dropdown">
		          	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">yupeng6 <span class="caret"></span></a>
		          	<ul class="dropdown-menu"> 
			            <li><a href="#">退出</a></li> 
		          	</ul>
		        </li>
		    </ul>
	    </div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav> 
  @yield('content') 
    @yield('footer')
</body>
</html>
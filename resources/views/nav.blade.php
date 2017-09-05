<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
    <li><a href="#!">博马森投资创业项目</a></li>
</ul>
<ul id="dropdown2" class="dropdown-content">
    <li><a href="#!">德国投资创业</a></li>
    <li><a href="#!">欧盟蓝卡</a></li>
    <li><a href="#!">商务咨询</a></li>
    <li><a href="#!">商务中心</a></li>
</ul>
<ul id="nav-mobile" class="side-nav">
    <li><a href="#">首页</a></li>
    <li><a href="#!">投资项目</a></li>
    <li><a href="#!">德达服务</a></li>
    <li><a href="#!">联系我们</a></li>

</ul>

<div class=" navbar-fixed">
    <nav class="white " role="navigation">
        <div class="nav-wrapper container ">
            <a id="logo-container" href="#" class="brand-logo">Logo</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="{{ url('/') }}">首页</a></li>
                <li><a href="#!" class="dropdown-button" data-activates="dropdown1">投资项目</a></li>
                <li><a href="#!" class="dropdown-button" data-activates="dropdown2">德达服务</a></li>
                <li><a href="{{ url('contact') }}">联系我们</a></li>
            </ul>

            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>
</div>

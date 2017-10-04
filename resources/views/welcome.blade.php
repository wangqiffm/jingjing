@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')
    <div id="index-banner" class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">


            <br><br>
            <h1 class="header center white-text text-lighten-2">德国是您进驻欧洲的首选</h1>
            <div class="row center">
                <h5 class="header col s12 light">德达商业服务愿为您在德国的投资创业提供最专业、最全面的服务。</h5>
            </div>
            <div class="row center">
                <a href="#!" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
            </div>
            <br><br>



        </div>
        <div class="parallax"><img src="img/a.jpg" alt="Unsplashed background img 1"></div>
    </div>

    <div class="slider parallax-container valign-wrapper">
        <ul class="slides">
            <li>
                <img src="https://lorempixel.com/580/250/nature/1"> <!-- random image -->
                <div class="caption center-align">
                    <h3>This is our big Tagline!</h3>
                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
            </li>
            <li>
                <img src="https://lorempixel.com/580/250/nature/2"> <!-- random image -->
                <div class="caption left-align">
                    <h3>Left Aligned Caption</h3>
                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
            </li>
            <li>
                <img src="https://lorempixel.com/580/250/nature/3"> <!-- random image -->
                <div class="caption right-align">
                    <h3>Right Aligned Caption</h3>
                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
            </li>
            <li>
                <img src="https://lorempixel.com/580/250/nature/4"> <!-- random image -->
                <div class="caption center-align">
                    <h3>This is our big Tagline!</h3>
                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
            </li>
        </ul>
    </div>


    <div class="container">
        <div class="section">

            <div class="row">

                <div class="col s12 center bs-component">
                    <h3><i class="mdi-content-send brown-text"></i></h3>
                    <h4>公司简介</h4>
                    <p class="left-align light caption">德达商业服务是一家德国公司，专长德国房地产投资、德国创业、法人签证、欧盟蓝卡和德国工作签证等方面的咨询。
                        我们最新推出的莱法州博马森投资创业项目受到了当地政府的高度重视和认可，中国企业的入驻对当地的经济发展有着重要的作用，这将是一个双赢的项目！
                        德达商业服务总部设在德国法兰克福，在这座德国金融中心，我们为中国公司顺利开启欧洲业务提供办公场所，法律、税务咨询，信件处理等商务服务。</p>
                </div>


            </div>


            <!--   Icon Section   -->

            <div class="row">
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
                        <h5 class="center">德国投资创业</h5>

                        <p class="light">
                            德国是一个民主的、法制健全的、欧洲经济实力最强的国家，在这里投资创业首先有安全感，不会受到过多权利和政策的影响。<br>

                        </p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="material-icons">group</i></h2>
                        <h5 class="center">欧盟蓝卡</h5>

                        <p class="light">
                            德国欧盟蓝卡是指非欧盟国家专业人才在拿到德国公司的工作合同并满足一定条件的前提下可以申请的一种居留和工作兼并的签证。
                        </p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
                        <h5 class="center">商务咨询</h5>

                        <p class="light">
                            德达的商务咨询重心在于为德国博马森城市招商引资。

                            内容囊括：建立友好城市，协助中德企业进行商务往来，吸引中方企业及个人来博马森投资，加强教育和学术方面的交流。


                        </p>
                    </div>
                </div>


            </div>

        </div>
    </div>


    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row right">
                    <h5 class="header col s12  light ">德达商业服务</h5>
                    <h6 class="header col s12  light ">为您投资德国搭桥护航</h6>
                </div>

            </div>
        </div>
        <div class="parallax"><img src="img/slide_03.jpg" alt="Unsplashed background img 2"></div>
    </div>



    <div class="container">
        <div class="section">

            <div class="row">

                <div class="col s12 m6 bs-component">
                    <div class="card sticky-action large">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/service1.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">德国投资创业<i class="material-icons right">more</i></span>
                            <p>德国是一个民主的、法制健全的、欧洲经济实力最强的国家，在这里投资创业首先有安全感，不会受到过多权利和政策的影响。 </p>
                        </div>
                        <div class="card-action"><a href="#">Read more</a></div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">德国投资创业<i class="material-icons right">close</i></span>
                            <p>德国是一个民主的、法制健全的、欧洲经济实力最强的国家，在这里投资创业首先有安全感，不会受到过多权利和政策的影响。</p>
                            <p>其次，各地政府欢迎和期待来自中国的投资，不论个体还是企业，只要它的投资是健康的、持续的、可以促进当地的经济发展,政府会尽可能地提供便利和服务，并且有居留法（Aufenthaltsgesetz）21章节第1条，法律上保证外国商人在德国的居留权。</p>
                        </div>
                    </div>
                </div>

                <div class="col s12 m6">
                    <div class="card sticky-action large">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/service2.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">欧盟蓝卡<i class="material-icons right">more</i></span>
                            <p>德国欧盟蓝卡是指非欧盟国家专业人才在拿到德国公司的工作合同并满足一定条件的前提下可以申请的一种居留和工作兼并的签证。 </p>
                        </div>
                        <div class="card-action"><a href="#">Read more</a></div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">欧盟蓝卡<i class="material-icons right">close</i></span>
                            <h5>申请人获得蓝卡条件</h5>
                            <p>德国认可的大学毕业文凭<br />工作合同年收入50.800欧元以上<br />工程师、医生、IT专业人才工资标准可以降低至39.624欧元</p>
                            <h5>获得德国永居条件</h5>
                            <p>申请人拥有蓝卡33个月<br />或者申请人拥有蓝卡21个月并且德文水平达到了B1</p>
                            <h5>办理流程</h5>
                            <p>1.&nbsp;&nbsp; &nbsp;申请人提供英文简历<br />2.&nbsp;&nbsp; &nbsp;德达商业服务对此进行免费评估<br />3.&nbsp;&nbsp; &nbsp;通过者委托德达提供咨询和服务<br />4.&nbsp;&nbsp; &nbsp;德达指导和协助客户在德国找工作<br />5.&nbsp;&nbsp; &nbsp;签订工作合同<br />6.&nbsp;&nbsp; &nbsp;办理赴德蓝卡签证</p>
                        </div>
                    </div>
                </div>


                <div class="col s12 m6">
                    <div class="card sticky-action large">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/service4.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">商务咨询<i class="material-icons right">more</i></span>
                            <p>德达的商务咨询重心在于为德国博马森城市招商引资。 </p>
                        </div>
                        <div class="card-action"><a href="#">Read more</a></div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">商务咨询<i class="material-icons right">close</i></span>
                            <p>德达的商务咨询重心在于为德国博马森城市招商引资。</p>
                            <p>内容囊括：建立友好城市，协助中德企业进行商务往来，吸引中方企业及个人来博马森投资，加强教育和学术方面的交流。</p>
                            <p>博马森是一座很有发展潜力的城市，博马森市政府欢迎中国企业来此投资。比如，博马森位于欧洲的中心，紧邻德国最大的欧特莱斯打折村，房地产价位偏低，因此它可以开发成一座欧洲度假的中转城。这只是我们的一个抛砖引玉，您有走出国门，立足德国，放眼欧洲的实力和雄心，德达商业服务愿为您助一臂之力，提供全面专业的商务咨询。</p>
                        </div>
                    </div>
                </div>

                <div class="col s12 m6">
                    <div class="card sticky-action large">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/service5.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">商务中心<i class="material-icons right">more</i></span>
                            <p>为您提供丰富的商业服务 </p>
                        </div>
                        <div class="card-action"><a href="#">Read more</a></div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">商务中心<i class="material-icons right">close</i></span>
                            <ul>
                                <li>提供德国日常生活指南</li>
                                <li>信件、包裹的接收和转发</li>
                                <li>翻译服务</li>
                                <li>信件处理</li>
                                <li>会议服务</li>
                                <li>税务服务</li>
                                <li>法律咨询</li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>


        </div>
    </div>




    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h5 class="header col s12 light">博马森投资创业项目</h5>
                    <h6 class="header col s12 light">投入少，周期短，可掌控，是一个双赢的投资创业移民方案</h6>
                    <h6 class="header col s12 light"><a href="#!" class="btn waves-effect waves-light orange lighten-1">Get Started</a></h6>

                </div>
            </div>
        </div>
        <div class="parallax"><img src="img/service1.jpg" alt="Unsplashed background img 3"></div>
    </div>

@endsection
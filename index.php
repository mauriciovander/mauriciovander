<!DOCTYPE html>
<html xmlns:ng="http://angularjs.org" id="ng-app" class="no-js" lang="en" ng-app="app">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Add Your favicon here -->
    <!--<link rel="icon" href="img/favicon.ico">-->

    <title>Mauricio van der Maesen de Sombreff | Personal site</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Animation CSS -->
    <link href="/assets/css/animate.min.css" rel="stylesheet">

    <link href="/assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="/assets/css/style.css" rel="stylesheet">
</head>

<body id="page-top" ng-cloak class="ng-cloak" ng-controller="MainCtrl as main">

<div class="navbar-wrapper">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top"><img src="/assets/img/photos/IMG_0290_1024.jpg" width="150px;" alt="Profile" /></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="page-scroll" href="#profile">Profile</a></li>
                        <li><a class="page-scroll" href="#interests">Interests</a></li>
                        <li><a class="page-scroll" href="#projects">Projects</a></li>
                        <li><a class="page-scroll" href="#contact">Contact</a></li>
                        <!-- <li><a href="#login" data-toggle="modal" data-target="#loginModal">Login</a></li> -->
                    </ul>
                </div>
            </div>
        </nav>
</div>

<div id="inSlider" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="container">
                <div class="carousel-caption">
                    <br/><br/>
                    <h1 style="color:white">Mauricio van der Maesen de Sombreff</h1>
                    <br/>
                    <p>Fullstack software developer</p>
                    <p>Open source enthusiast</p>

                </div>
            </div>
            <!-- Set background for slide in css -->
            <div class="header-back one"></div>

        </div>
    </div>
</div>

<section id="profile" class="container services">
    <br/>
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Main profile</div>
                <div class="panel-body">
                    <p><b>Full Stack Software developer</b></p>
                    <p>PHP,MySQL,AngularJS,Python,C++</p>
                    <p>More than 10 years of software development experience</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Engineering</div>
                <div class="panel-body">
                    <p>Telecommunications Engineering</p>
                    <p><b>Computer Science</b></p>
                    <p>Signal Processing, Machine Learning, Pattern Recognition</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Electronics</div>
                <div class="panel-body">
                    <p>PLC programming for industrial and domestic applications</p>
                    <p>Siemens S7-200, S7-1200 and Logo!</p>
                    <p><b>I'm a Maker</b></p>
                    <p>I enjoy making every kind of stuff controlled by <a href="https://www.raspberrypi.org/" target="_blank">Raspberry Pi</a> and/or <a href="http://www.arduino.cc/" target="_blank">Arduino</a> boards</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Sound & Accoustics</div>
                <div class="panel-body">
                    <p>Sound & Communication Systems design, installation and configuration</p>
                    <p>Live FoH & Recording <b>Sound Engineer</b></p>
                    <p>Accoustical insulation and acconditioning</p>
                </div>
            </div>
        </div>

    </div>
</section>

<section id="interests" class="container features">
    <div class="row">
        <div class="col-lg-12 text-center">
            <div class="navy-line"></div>
            <h1>My profile</h1>
            <p>Get to know me.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 text-center wow fadeInLeft">
            <div>
                <i class="fa fa-code features-icon fa-2x" style="color:#353432;"></i>
                <h2>Research</h2>
                <p>I enjoy studying and learning new stuff every day. I'm always exploring and testing new ideas</p>
                <p>My current passion is Computational Neuroscience</p>
                <p>Learning algorithms and pattern recognition are some of my prefered topics</p>
            </div>
            <div class="m-t-lg">
                <i class="fa fa-file-pdf-o features-icon fa-2x" style="color:#353432;"></i>
                <h2>Work experience</h2>
                <p>Check the latest version of my formal resume from <a href="https://docs.google.com/document/d/1-TtDoXT7vZOkmXUDsNRgZ28De_3f8hbLuiDu9KMNNAQ/pub" target="_blank">my drive</a></p>
            </div>
        </div>
        <div class="col-md-6 text-center  wow zoomIn">
            <img src="/assets/img/btc-address-qr.png" alt="send-me-bitcoins" class="img-responsive" style="width:125px; height:125px; margin:auto; margin-top: 100px;"> <br/>
            <p>If you feel extremly generous
            <br/>just <a href="bitcoin:1ABfpwUQkkpoYMaufpcz6TpJNHz57jwTFE?amount=0.01&label=Please%20donate%20to%20multibit.org" target="_blank">send me some <i class="fa fa-btc"></i>itcoins</a></p>
        </div>
        <div class="col-md-3 text-center wow fadeInRight">
            <div>

                <i class="fa fa-globe features-icon fa-2x"></i>
                <h2>I love Travelling</h2>
                <p>Places I've visited:</p>
                <p>Brasil, Chile, Argentina, Paraguay, Mexico, EE.UU., Spain, Germany, Austria, Switzerland, Italy</p>
            </div>
            <div class="m-t-lg">
                <i class="fa fa-bicycle features-icon fa-2x" style="color:#353432;"></i>
                <h2>Green</h2>
                <p>I actively support everybody by avoiding the use of any non-renewable energy.</p>
            </div>
        </div>
    </div>

</section>

<section id="projects" class="container features">

    <div class="row">
        <div class="col-lg-12 text-center">
            <div class="navy-line"></div>
            <h1>Projects</h1>
            <p>I'd like to share some projects and links that I like to use in my own apps</p>
        </div>
    </div>
    <div class="row features-block">
        <div class="col-lg-8 features-text wow fadeInLeft">
            <h2>
            <i class="fa fa-circle features-icon" style="color:#353432;font-size: 11px;margin: 10px;"></i>
            Some useful things used to build this site</h2>
          
            <h3><a href="http://fontawesome.io/icons/" target="_blank"><i class="fa fa-flag"></i> Font Awesome</a></h3> 
            <p>The iconic font and CSS toolkit</p>
            <p>A collection of Styles and Fonts realy helpful for rapid web apps prototyping</p>            
            <p>Animated icons like <i class="fa fa-cog fa-spin fa-2x"></i> are just as easy as adding <code>&lt;i class="fa fa-cog fa-spin"&gt;&lt;/i&gt;</code> to your HTML.
            <br/>No GIF required!</p>
            <br/>

            <h3><a href="http://getbootstrap.com/" target="_blank"><i class="fa fa-twitter"></i> Bootstrap</a></h3> 
            <p><i class="fa fa-quote-left"></i> Bootstrap is the most popular HTML, CSS, and JS framework
            <br/>for developing responsive, mobile first projects on the web. <i class="fa fa-quote-right"></i></p>
            <p>Bootstrap JS library simplifies the creation of modals, accordions, popovers, carouseles and some other well thought user interface features.</p>
            <br/>

            <h3><a href="https://angularjs.org/" target="_blank"><i class="fa fa-html5"></i> AngularJS</a></h3> 
            <p>AngularJS is a Google Javascript Framework that allows us to extend HTML to whatever we need.</p>
            <p>This framework is great for developing a full client-side MVC architecture. On REST based web applications,
            <br/>Angular client side single-page applications allows the backend devellopers to HTML rendering,
            <br/>focusing on business logic and optimizing workflows</p>
            <p>For the front-end developer, Angular two-way data binding allows for cool stuff like this:</p>
            <form name="testForm" ng-submit="addItem();" novalidate>
                <div class="row">
                    <div class="col-lg-3">
                        <input class="form-control" type="text" ng-model="new_item.name" placeholder="Name" tabindex="1" required/> 
                    </div>
                    <div class="col-lg-3">
                        <input class="form-control" type="number" ng-model="new_item.number" placeholder="Number" tabindex="2" required/>
                    </div>
                    <div class="col-lg-3">
                        <input class="btn btn-primary" type="submit" value="add item" tabindex="3" ng-disabled="testForm.$invalid"/>
                    </div>
                </div>
            </form>
            <table class="table" ng-show="table_items.length>0">
                <tr>
                    <th><a ng-click="predicate='name';reverse=!reverse;">Name <i ng-if="predicate=='name' && !reverse" class="fa fa-sort-amount-asc"></i><i ng-if="predicate=='name' && reverse" class="fa fa-sort-amount-desc"></i></a></th>
                    <th><a ng-click="predicate='number';reverse=!reverse;">Number <i ng-if="predicate=='number' && !reverse" class="fa fa-sort-amount-asc"></i><i ng-if="predicate=='number' && reverse" class="fa fa-sort-amount-desc"></i></a></th>
                </tr>
                <tr ng-animate="'animate'" ng-repeat="item in table_items | orderBy:predicate:reverse">
                    <td>{{item.name}}</td>
                    <td>{{item.number}}</td>
                </tr>
            </table>
            <button class="btn btn-primary" ng-click="clearItems()" ng-show="table_items.length>0">Clear table</button>
            
        </div>

<!--         <div class="col-lg-4 text-right wow fadeInRight">
            <img src="/assets/img/photos/IMG_0456_1024.jpg" width="90%" class="img-responsive pull-right" style="box-shadow:10px 10px 5px #bbb;">
        </div>
        <div class="col-lg-4 text-right wow fadeInRight" style="margin-top:50px;">
            <img src="/assets/img/photos/IMG_0310_1024.jpg" width="50%" class="img-responsive pull-right" style="box-shadow:10px 10px 5px #bbb;">
        </div>
        <div class="col-lg-4 text-right wow fadeInRight" style="margin-top:50px;">
            <img src="/assets/img/photos/IMG_1112_1024.jpg" width="40%" class="img-responsive pull-right" style="box-shadow:10px 10px 5px #bbb;">
        </div> -->

    </div>
</section>

<section id="contact" class="gray-section contact">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Contact Me</h1>
            </div>
        </div>
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <address>
                    <strong><span class="navy">Mauricio van der Maesen de Sombreff</span></strong><br/>
                    <br/>
                    Skype: <a href="skype:mauricio.vander?call">mauricio.vander</a><br/>
                    Mobile: (+598) 99 401 996<br/>
                    <!-- e-mail: <a href="mailto:mauriciovander@gmail.com">mauriciovander@gmail.com</a><br/> -->
                    Montevideo, Uruguay
                </address>
            </div>
            <div class="col-lg-12 text-center">
                <!-- <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#contactModal">Send me a message</a> -->
                <a href="mailto:mauriciovander@gmail.com" class="btn btn-primary">Send me a message</a>

                <p class="m-t-sm">
                    Or follow me on social networks
                </p>

                <ul class="list-inline social-icon">
                    <li><a alt="tweeter" href="https://twitter.com/mauriciovander" target="_blank"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a alt="facebook" href="https://www.facebook.com/mauriciovander" target="_blank"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a alt="linkedin" href="https://uy.linkedin.com/in/mauriciovander" target="_blank"><i class="fa fa-linkedin"></i></a>
                    </li>
                    <li><a alt="instagram" href="https://instagram.com/mauriciovandermaesen" target="_blank"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li><a alt="google+" href="https://plus.google.com/+MauriciovanderMaesendeSombreff80/posts" target="_blank"><i class="fa fa-google-plus"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
                <p><strong>&copy; 2015 MaUrIcIoVaNdEr</strong></p>
            </div>
        </div>
    </div>
</section>

<script src="/assets/js/jquery-2.1.1.js"></script>
<script src="/assets/js/pace.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/classie.js"></script>
<script src="/assets/js/cbpAnimatedHeader.js"></script>
<script src="/assets/js/wow.min.js"></script>
<script src="/assets/js/inspinia.js"></script>

<script src="/assets/js/angular/angular.min.js"></script>
<script src="/assets/js/angular/angular-animate.min.js"></script>
<script src="/assets/js/angular/angular-resource.min.js"></script>
<script src="/assets/js/angular/angular-route.min.js"></script>
<script src="/assets/js/angular/angular-sanitize.min.js"></script>
<script src="/assets/js/angular/ui-utils.min.js"></script>

<script>
(function(){
    angular.module('app',['ngRoute','ngAnimate'])

    .controller('MainCtrl',['$scope',function($scope,ajax) {
        console.log('MainCtrl');
        $scope.example = {};
        $scope.table_items = [];
        $scope.new_item = {};

        $scope.addItem = function() {
            $scope.table_items.push($scope.new_item);
            $scope.new_item = {};
        };

        $scope.clearItems = function() {
            $scope.table_items = [];
        };
    }]);  

})();
</script>


<!-- Modal -->
<!-- <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="loginModalLabel"> <i class="fa fa-user"></i> Login</h4>
      </div>
      <div class="modal-body">
        <form name="loginForm" ng-submit="logIn(); $event.preventDefault();" prevent-default novalidate>
            <div class="row">
                <div class="col-lg-8">
                    <input class="form-control" type="email" name="email" ng-model="reseller.email" placeholder="yourname@yourdomain.com" AUTOCOMPLETE="off" required /><br/>
                    <input class="form-control" type="password" name="password" ng-model="reseller.password" placeholderpassword AUTOCOMPLETE="off" minlength="6" ng-minlength="6" required /><br/>
                    <input class="form-control" type="text" name="mfa_code" ng-model="reseller.mfa_code" placeholder="MFA-Code (if required)" minlength="6" ng-minlength="6" AUTOCOMPLETE="off" /><br/>
                    <input ng-disabled="loginForm.$invalid" class="btn btn-primary col-lg-12" type="submit" value="Login" />
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-sign-in" style="font-size:10em;"></i>
                </div>
            </div>
        </form>
      </div>

    </div>
  </div>
</div> -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-62744480-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>

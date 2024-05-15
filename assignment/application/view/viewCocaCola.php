<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../application/css/bootstrap.css" crossorigin="anonymous">
    <link rel="stylesheet" href="../application/css/custom.css" crossorigin="anonymous">

    <!-- Lets have some fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <!-- fancyBox3 -->
    <link rel="stylesheet" type="text/css" href="../application/css/jquery.fancybox.min.css">

    <title>2024 Web 3D Applications Assignment</title>
</head>
<body id="bodyColor">

<!-- The 3D App header -->
<nav id="headerColor" class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
    <img src="../application/assets/images/logo.png" id="logo_img"/>

    <!-- Brand -->
    <div class="logo_text_container">
        <a  class="logo_name navHome" href="#">Coca Cola Development</a>
        <a  class="strapline navHome" href="#">Hope you enjoy new Cool CoCo Cola  </a>
    </div>

    <!-- Navbar Menu Icon -->
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- link Menu Icon button to the links class navbar-collapse selector] -->
    <div class="collapse navbar-collapse">
        <!-- Links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a  class="nav-link page_btn navHome" href="#">Homepage</a>
            </li>
            <li class="nav-item">
                <a id="navAbout" class="nav-link page_btn" href="#" data-toggle="popover" data-trigger="hover"
                   data-placement="bottom" title="About Web 3D Applications"
                   data-content="3D Apps is a final year and postgraduate module ...">About This</a>
            </li>

            <!-- Dropdown -->
            <li class="nav-item">
                <a id="navModels" class="nav-link page_btn" href="#" data-toggle="popover" data-trigger="hover"
                   data-placement="bottom" title="GLB Models"
                   data-content="There are three GLB models: Coke, Sprite and Pepper.">GLB Models</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page_btn" href="#" data-toggle="modal" data-target="#contactModal">Contact Me</a>
            </li>
        </ul>
    </div>
</nav>

<!-- This is the main contents of the page, it has a background image across 1 column, followed by three columns holding cards in a row for the 3 images and associated texts -->
<div class="container-fluid">

    <!-- This is the home page contents -->
    <div id="home" class="main_contents">
        <!-- A row for the main 3D image theme — could make this a Jubotron with a carousel -->
        <div class="row">
            <div class="col-sm-12">

                <div class="cocoCola_banner">
                    <div class="banner_text">
                        <h1 id="title_home" style="color: darkseagreen">Welcome to Coca Cola World!</h1>
                        <p id="subTitle_home" style="color: yellowgreen">Enjoy the refreshing taste of Coca Cola.</p>
                        <span id="description_home">The Coca Cola Company is the world's leading manufacturer, marketer and distributor of non-alcoholic beverage concentrates and syrups, and produces nearly 400 brands.</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- A row to hold three cards for the Coke, Sprite and Pepper contents -->
        <div class="row">
            <div class="col-sm-4">
                <div class="card img-narrow">
                    <a href="../application/assets/images/renderImages/cola.png" data-fancybox data-caption="My 3D Coke Can Render">
                        <img class="card-img-top img-fluid img-thumbnail" src="../application/assets/images/coca_cola.png" alt="Coca Cola">
                    </a>
                    <div class="card-body">
                        <div id="title_left" class="card-title drinksText"></div>
                        <div id="subTitle_left" class="card-subtitle drinksText"></div>
                        <div id="description_left" class="card-text drinksText"></div>
                        <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola"
                           class="btn btn-primary btn-responsive">Find out more ...</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <a href="../application/assets/images/renderImages/sprite.png" data-fancybox data-caption="My 3D Sprite Bottle Render">
                        <img class="card-img-top img-fluid img-thumbnail" src="../application/assets/images/sprite.jpg" alt="Sprite">
                    </a>
                    <div class="card-body">
                        <div id="title_centre" class="card-title drinksText"></div>
                        <div id="subTitle_centre" class="card-subtitle drinksText"></div>
                        <div id="description_centre" class="card-text drinksText"></div>
                        <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite"
                           class="btn btn-primary btn-responsive">Find out more ...</a>
                    </div>

                </div>
            </div>

            <div class="col-sm-4">
                <div class="card img-narrow">
                    <a href="../application/assets/images/renderImages/drpepper.png" data-fancybox data-caption="My 3D Pepper Can Render">
                        <img class="card-img-top img-fluid img-thumbnail" src="../application/assets/images/dr_pepper.jpg" alt="Dr Pepper">
                    </a>
                    <div class="card-body">
                        <div id="title_right" class="card-title drinksText"></div>
                        <div id="subTitle_right" class="card-subtitle drinksText"></div>
                        <div id="description_right" class="card-text drinksText"></div>
                        <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper"
                           class="btn btn-primary btn-responsive">Find out more ...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>  <!-- End home page contents-->

    <div id="about" style="display:none;">
        <h1>About This Project</h1>
        <p>This 3D App is part of an academic assignment from Week 1 to 8, where we developed our skills in HTML5, CSS3, JavaScript, and more. The task required us to create a refined 3D App using X3D for modeling Coca Cola branded products.</p>
        <p>Key features expected to integrate include:</p>
        <ul>
            <li>Advanced use of X3DOM to display interactive 3D models.</li>
            <li>Utilization of AJAX and JSON for dynamic content management.</li>
            <li>Interaction capabilities using JavaScript and jQuery for enhancing user experience.</li>
            <li>An MVC design pattern implementation with PHP and a SQLite backend for a robust application architecture.</li>
        </ul>
        <p>The goal is to not only demonstrate our technical skills but also to push the boundaries of what's possible with web-based 3D applications.</p>
    </div>




    <!-- This is the content for GLB models and 3D Image Gallery -->
    <div id="models" class="main_contents" style="display:none;">
        <!-- Row to hold two cards to hold 1) the GLB model, and 2) the gallery-->
        <div class="row">
            <!-- GLB Model -->
            <div class="col-sm-8">
                <div class="card text-left">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a id="navCoke" class="nav-link active" href="#">GLB Models</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <!-- GLB Models -->
                        <div>
                            <div id="x3dModelTitle_coke" class="card-title drinksText"></div>
                            <div id="x3dModelTitle_sprite" class="card-title drinksText"></div>
                            <div id="x3dModelTitle_pepper" class="card-title drinksText"></div>

                            <button type="button" class="btn btn-success btn-responsive" onMouseUp="cokeScene();; setActiveButton(this);">Coke
                            </button>
                            <button type="button" class="btn btn-success btn-responsive" onMouseUp="spriteScene();; setActiveButton(this);">
                                Sprite
                            </button>
                            <button type="button" class="btn btn-success btn-responsive" onMouseUP="pepperScene();; setActiveButton(this);">
                                Pepper
                            </button>

                            <!-- Place the Three.js code here -->
                            <div class="model3D">
                                <div id="threejs-container" style="width: 100%; height: 400px;"></div>
                            </div>
                            <div id="x3dCreationMethod_coke" class="card-text drinksText"></div>
                            <div id="x3dCreationMethod_sprite" class="card-text drinksText"></div>
                            <div id="x3dCreationMethod_pepper" class="card-text drinksText"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3D image gallery -->
            <div class="col-sm-4">
                <div class="card text-left">
                    <div class="card-header gallery-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Gallery</a>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="card-title title_gallery drinksText"></div>
                        <div class="gallery" id="gallery"></div>
                        <div class="card-text description_gallery drinksText"></div>
                    </div>
                </div> <!-- End gallery card -->
            </div> <!-- End gallery column -->
        </div> <!-- End row for GLB Model and Gallery -->
    </div>

    <!-- Row to hold the interaction panels -->
    <div id="interaction" class="row" style="display:none;">
        <!-- Column for the camera view controls -->
        <div class="col-sm-4">
            <div class="card text-left">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <!-- Dropdown nav-tab -->
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Cameras</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#" onclick="cameraFront();">Front</a>
                                <a class="dropdown-item" href="#" onclick="cameraBack();">Back</a>
                                <a class="dropdown-item" href="#" onclick="cameraLeft();">Left</a>
                                <a class="dropdown-item" href="#" onclick="cameraRight();">Right</a>
                                <a class="dropdown-item" href="#" onclick="cameraTop();">Top</a>
                                <a class="dropdown-item" href="#" onclick="cameraBottom();">Bottom</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="card-Title x3dCamera_Subtitle drinksText">
                        <h3>Camera Views</h3>
                    </div>
                    <a href="#" class="btn btn-success btn-responsive" onclick="cameraFront();; setActiveButton(this);">Default</a>
                    <a href="#" class="btn btn-success btn-responsive" onclick="cameraBack();; setActiveButton(this);">Back</a>
                    <a href="#" class="btn btn-success btn-responsive" onclick="cameraLeft();; setActiveButton(this);">Left</a>
                    <a href="#" class="btn btn-success btn-responsive" onclick="cameraRight();; setActiveButton(this);">Right</a>
                    <a href="#" class="btn btn-outline-dark disabled btn-responsive">Off</a>
                    <div class="card-text x3dCameraDescription drinksText">
                        <p>These buttons select a limited range of X3D model viewpoints, use the dropdown menu for more camera views</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column for the animation controls -->
        <div class="col-sm-4">
            <div class="card text-left">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Animation</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="card-Title x3dAnimationSubtitle drinksText">
                        <h3>Animation Options</h3>
                    </div>
                    <a href="#" class="btn btn-success btn-responsive" onclick="spin('x'); setActiveButton(this);">RotX</a>
                    <a href="#" class="btn btn-success btn-responsive" onclick="spin('y'); setActiveButton(this);">RotY</a>
                    <a href="#" class="btn btn-success btn-responsive" onclick="spin('z'); setActiveButton(this);">RotZ</a>
                    <a href="#" class="btn btn-success btn-responsive" onclick="stopRotation(); setActiveButton(this);">Stop</a>
                    <div class="card-text x3dAnimationDescription drinksText">
                        <p>These buttons select a range of X3D animation options</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column for the render type and lighting controls -->
        <div class="col-sm-4">
            <div class="card text-left">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Render</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#" onclick="setActiveButton(this);">Polygon</a>
                                <a class="dropdown-item" href="#" onclick="wireFrame(); setActiveButton(this);">Wireframe</a>
                                <a class="dropdown-item" href="#" onclick="setActiveButton(this);">Vertex</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Lights</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#" onclick="headLight(); setActiveButton(this);">Default</a>
                                <a class="dropdown-item" href="#" onclick="omniLight(); setActiveButton(this);">Onmi On/Off</a>
                                <a class="dropdown-item" href="#" onclick="targetLight(); setActiveButton(this);">Target On/Off</a>
                                <a class="dropdown-item" href="#" onclick="headLight(); setActiveButton(this);">Headlight On/Off</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="card-Title x3dRendersubtitle drinksText">
                        <h3>Render and Lighting Options</h3>
                    </div>
                    <a href="#" class="btn btn-success btn-responsive" onclick="setActiveButton(this);">Poly</a>
                    <a href="#" class="btn btn-secondary btn-responsive" onclick="wireFrame(); setActiveButton(this);">Wire</a>
                    <a href="#" class="btn btn-success btn-responsive" onclick="headLight(); setActiveButton(this);">Headlight</a>
                    <a href="#" class="btn btn-outline-dark btn-responsive" onclick="setActiveButton(this);">Default</a>
                    <div class="card-text x3dRenderDescription drinksText">
                        <p>These buttons select a limited number of render and lighting options; use the dropdown menus for more options</p>
                    </div>
                </div>
            </div>
        </div> <!-- End row for the interaction panels -->

    <!-- Row to hold one card to hold the coke descriptive text, etc.-->
    <div id="cokeDescription" class="row" style="display:none;">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div id="title_coke" class="card-title drinksText"></div>
                    <div id="subTitle_coke" class="card-subtitle drinksText"></div>
                    <div id="description_coke" class="card-text drinksText"></div>
                    <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Visit Coke</a>
                </div>
            </div>
        </div>
    </div> <!-- End coke description contents -->

    <!-- Row to hold one card to hold the sprite descriptive text, etc.-->
    <div id="spriteDescription" class="row" style="display:none;">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div id="title_sprite" class="card-title drinksText"></div>
                    <div id="subTitle_sprite" class="card-subtitle drinksText"></div>
                    <div id="description_sprite" class="card-text drinksText"></div>
                    <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary btn-responsive">Visit Sprite</a>
                </div>
            </div>
        </div>
    </div> <!-- End sprite description contents -->

    <!-- Row to hold one card to hold the pepper descriptive text, etc.-->
    <div id="pepperDescription" class="row" style="display:none;">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div id="title_pepper" class="card-title drinksText"></div>
                    <div id="subTitle_pepper" class="card-subtitle drinksText"></div>
                    <div id="description_pepper" class="card-text drinksText"></div>
                    <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-primary btn-responsive">Visit Pepper</a>
                </div>
            </div>
        </div>
    </div> <!-- End pepper description contents -->

</div> <!-- End 3D App SPA Contents -->

<nav id="footerColor" class="navbar navbar-expand-sm footer">
    <div class="container-fluid">
        <div class="navbar-text float-left copyright">
            <p><span class="align-baseline">&copy 2024 3D Apps  | <a href="javascript:changeLook()">Restyle</a> | <a href="javascript:changeBack()">Reset</a></span></p>
        </div>



        <div class="navbar-text float-right social copyright">
            <p style="display: inline; margin-right: 1vw"><span class="align-baseline"><a  href="#" data-toggle="modal" data-target="#originModal">Statement of Originality</a>| <a  href="#" data-toggle="modal" data-target="#referenceModal">References</a></span></p>
            <a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
            <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
            <a href="#"><i class="fab fa-google-plus fa-2x"></i></a>
            <a href="#"><i class="fab fa-github-square fa-2x"></i></a>
        </div>
    </div>
</nav>

<!-- My 3D App modals -->
<!-- Contact modal -->
<!-- The Modal -->
<div class="modal fade" id="contactModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">3D App Contact Details</h4>
                <button type="button" class="close" data-dismiss="modal">&times;"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <p>Wai Yu Chin</p>
                <p>University of Sussex</p>
                <p>Email: wc290@sussex.ac.uk</p>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

    <div class="modal fade" id="originModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Statement of Originality</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <p>These web pages are submitted as part requirement for the degree of BSc Games and Multimedia Environments at the University of Sussex.  They are the product of my own labour except where indicated in the web page content. These web pages or contents may be freely copied and distributed provided the source is acknowledged.</p>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="referenceModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Reference</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">

                    <p> <a href="https://users.sussex.ac.uk/~martinwh/3dapp/labs/">Live Feedback Site of Web 3D Applications</a></p>
                    <p> <a href="https://github.com/martinwh/3D_Apps_2020">GitHub Repository of 3D_Apps_2020</a></p>
                    <p><a href="https://www.coca-cola.com/gb/en">Coca Cola Greate Britain</a></p>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>


<!-- JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../application/js/jquery-3.2.1.js" crossorigin="anonymous"></script>
<script src="../application/js/popper.min.js" crossorigin="anonymous"></script>
<script src="../application/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="../application/js/fontawesome-all.min.js"></script>
<!-- Custom JavaScript code for your 3d App -->
<script src="../application/js/custom.js" crossorigin="anonymous"></script>
<!-- JavaScript to swap for SPA and restyle -->
<script src="../application/js/swap_restyle.js"></script>
<!-- JavaScript and PHP based Gallery generator  -->
<script type="text/javascript" src="../application/js/gallery_generator.js"></script>
<!-- JQuery code to get content data from a backend JSON file -->
<script src="../application/js/getJsonData.js"></script>
<!-- JavaScript model interactions -->
<script src="../application/js/modelInteractions.js"></script>
<!-- fancyBox3 => http://fancyapps.com/fancybox/3/ -->
<script src="../application/js/jquery.fancybox.min.js"></script>

<!-- Three.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/loaders/GLTFLoader.js"></script>
<script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/controls/OrbitControls.js"></script>

<!-- Three.js Model and Interaction Scripts -->
<script>
    let scene, camera, renderer, loader, model, controls;
    let light_headLight, light_omniLight, light_targetLight;

    function init() {
        // Setting the fixed size
        const width = document.body.clientWidth * 0.6;
        const height = document.body.clientHeight * 0.4;

        // Creating a Scene
        scene = new THREE.Scene();
        scene.background = null;

        // Creating a Camera
        camera = new THREE.PerspectiveCamera(75, width / height, 0.1, 1000);
        camera.position.z = 10; // Adjust the camera position to make it farther away

        // Creating a Renderer
        renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
        renderer.setSize(width, height);
        document.getElementById('threejs-container').appendChild(renderer.domElement);

        // Creating a Light Source
        light_headLight = new THREE.SpotLight(0xffffff, 5);
        light_headLight.position.set(0, 10, 10);
        scene.add(light_headLight);


        light_omniLight = new THREE.AmbientLight(0xffffff, 5);
        scene.add(light_omniLight);

        light_targetLight = new THREE.PointLight(0xffffff, 5);
        light_targetLight.position.set(5, 5, 5);
        scene.add(light_targetLight);

        // Add HemisphereLight for even more uniform lighting
        const hemisphereLight = new THREE.HemisphereLight(0xffffbb, 0x080820, 1);
        scene.add(hemisphereLight);

        // Creating a loader
        loader = new THREE.GLTFLoader();

        // Creating OrbitControls
        controls = new THREE.OrbitControls(camera, renderer.domElement);
        controls.enableDamping = true; // Enable damping effect
        controls.dampingFactor = 0.25;
        controls.screenSpacePanning = false;
        controls.minDistance = 2;
        controls.maxDistance = 50;
        controls.maxPolarAngle = Math.PI / 2;

        animate(); // Make sure animate is called immediately after init
    }

    function loadModel(url) {
        loader.load(url, function (gltf) {
            model = gltf.scene;

            // Wraparound boxes for computational models
            const box = new THREE.Box3().setFromObject(model);

            // Get the centre of the enclosing box
            const center = box.getCenter(new THREE.Vector3());

            // Get the size of the enclosing box
            const size = box.getSize(new THREE.Vector3());

            // Centre the model by subtracting its position from the position of the centre point
            model.position.sub(center);

            // Calculate maximum shaft length
            const maxAxis = Math.max(size.x, size.y, size.z);

            // Uniform scaling of models to desired proportions
            const scaleFactor = 10 / maxAxis; // Scale the model to fit better
            model.scale.multiplyScalar(scaleFactor);

            // Calculate the enclosing box and centre point again
            const newBox = new THREE.Box3().setFromObject(model);
            const newCenter = newBox.getCenter(new THREE.Vector3());

            // Adjust the position of the model again to ensure that it is still centred after scaling
            model.position.sub(newCenter);

            scene.add(model);

            // Render the scene
            renderer.render(scene, camera);
        }, undefined, function (error) {
            console.error(error);
        });
    }

    function animate() {
        requestAnimationFrame(animate);

        // If the model exists and the animation function is enabled, the rotation animation is executed
        if (model && enableRotation) {
            model.rotation[rotationAxis] += rotationSpeed;
        }

        // Update the controller
        controls.update();

        renderer.render(scene, camera);
    }

    // waiting for the DOM to finish loading before initialising Three.js
    window.onload = function() {
        init();
        loadModel('../application/assets/glb/cola.glb'); // Ensure models are loaded after initialisation
    };

    // Switching Model Functions
    function cokeScene() {
        $("#x3dModelTitle_coke").show();
        $("#x3dModelTitle_sprite").hide();
        $("#x3dModelTitle_pepper").hide();
        $("#x3dCreationMethod_coke").show();
        $("#x3dCreationMethod_sprite").hide();
        $("#x3dCreationMethod_pepper").hide();
        scene.remove(model);
        loadModel('../application/assets/glb/cola.glb');
    }

    function spriteScene() {
        $("#x3dModelTitle_coke").hide();
        $("#x3dModelTitle_sprite").show();
        $("#x3dModelTitle_pepper").hide();
        $("#x3dCreationMethod_coke").hide();
        $("#x3dCreationMethod_sprite").show();
        $("#x3dCreationMethod_pepper").hide();
        scene.remove(model);
        loadModel('../application/assets/glb/sprite.glb');
    }

    function pepperScene() {
        $("#x3dModelTitle_coke").hide();
        $("#x3dModelTitle_sprite").hide();
        $("#x3dModelTitle_pepper").show();
        $("#x3dCreationMethod_coke").hide();
        $("#x3dCreationMethod_sprite").hide();
        $("#x3dCreationMethod_pepper").show();
        scene.remove(model);
        loadModel('../application/assets/glb/drpepper.glb');
    }

    // Other Function Functions
    let enableRotation = false;
    let rotationAxis = 'y';
    let rotationSpeed = 0.01;

    function cameraFront() {
        camera.position.set(0, 0, 10); // Adjust the camera position to make it farther away
        camera.lookAt(0, 0, 0);
    }

    function cameraBack() {
        camera.position.set(0, 0, -10); // Adjust the camera position to make it farther away
        camera.lookAt(0, 0, 0);
    }

    function cameraLeft() {
        camera.position.set(-10, 0, 0); // Adjust the camera position to make it farther away
        camera.lookAt(0, 0, 0);
    }

    function cameraRight() {
        camera.position.set(10, 0, 0); // Adjust the camera position to make it farther away
        camera.lookAt(0, 0, 0);
    }

    function cameraTop() {
        camera.position.set(0, 10, 0); // Adjust the camera position to make it farther away
        camera.lookAt(0, 0, 0);
    }

    function cameraBottom() {
        camera.position.set(0, -10, 0); // Adjust the camera position to make it farther away
        camera.lookAt(0, 0, 0);
    }

    function spin(direction) {
        enableRotation = true;
        rotationAxis = direction;
        rotationSpeed = 0.01;
    }

    function stopRotation() {
        enableRotation = false;
    }

    function wireFrame() {
        if (model) {
            model.traverse((child) => {
                if (child.isMesh) {
                    child.material.wireframe = !child.material.wireframe;
                }
            });
        }
    }

    function setActiveButton(button) {
        // Remove active class from all buttons
        document.querySelectorAll('.btn.btn-responsive').forEach(btn => {
            btn.classList.remove('active');
        });

        // Add active class to the clicked button
        button.classList.add('active');
    }


    function headLight() {
        light_headLight.visible = !light_headLight.visible;
    }

    function omniLight() {
        light_omniLight.visible = !light_omniLight.visible;
    }

    function targetLight() {
        light_targetLight.visible = !light_targetLight.visible;
    }

</script>






</body>
</html>

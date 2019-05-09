//adapted from example code 'benskitchen.com'
/*This file renders models and toggles their attributes in virtual_museum.html
 */

function shieldScene(){
	console.log('entered shield scene');
	document.getElementById('SceneSwitch').setAttribute('whichChoice', 0);
	//call camera 
	cameraFront('shieldCam1');
}

function helmetScene(){
	console.log('enteed helmet scene');

	document.getElementById('SceneSwitch').setAttribute('whichChoice', 1);
	//call camera 
	cameraFront('helmetCam1');
}

function maceScene(){
	console.log('entered mace scene');

	document.getElementById('SceneSwitch').setAttribute('whichChoice', 2);
	//call camera 
	cameraFront('maceCam1');
}

function swordScene(){
	console.log('entered sword scene');

	document.getElementById('SceneSwitch').setAttribute('whichChoice', 3);
	//call camera 
	cameraFront('swordCam1');
}

function animateModel(identifier)
{ 	//console.log(identifier);
    if(document.getElementById('model__' + identifier).getAttribute('enabled')!= 'true')
        document.getElementById('model__' + identifier).setAttribute('enabled', 'true');
    else
        document.getElementById('model__' + identifier).setAttribute('enabled', 'false');
}

function wireFrame()
{	console.log('inside wireframe()');
	var e = document.getElementById('wire');
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}

var omniLight = true;
function omniLightToggle(modelLights)
{
	//console.log(omniLight);
	//console.log(modelLights);
	omniLight = !omniLight;
	//document.getElementsByClassName(modelLights)[0].setAttribute('on',omniLight.toString());
	lights = document.getElementsByClassName(modelLights);
	for(var i=0;i < lights.length;i++){
		document.getElementsByClassName(modelLights)[i].setAttribute('on',omniLight.toString());
	}
}

var spotLight = true;
function spotLightToggle(modelLights)
{
	console.log(spotLight);
	console.log(modelLights);
	spotLight = !spotLight;
	//document.getElementsByClassName(modelLights)[0].setAttribute('on',spotLight.toString());

	lights = document.getElementsByClassName(modelLights);
	for(var i=0;i < lights.length;i++){
		document.getElementsByClassName(modelLights)[i].setAttribute('on',spotLight.toString());
	}
}

function cameraFront(camera)
{ 	//console.log('model__' + camera);
	document.getElementById('model__' + camera).setAttribute('bind', 'true');
}

function cameraBack(camera)
{//console.log('model__' + camera);
	document.getElementById('model__' + camera).setAttribute('bind', 'true');
}

function cameraLeft(camera)
{//console.log('model__' + camera);
	document.getElementById('model__' + camera).setAttribute('bind', 'true');
}

/**
 * Change material functions. id is the id attr of the imageTexture tag in the x3d model
 */
var toggle1 = false;
function shieldMaterialToggle(id)
{ //console.log('inside materialToggle function');
	toggle1 = !toggle1;
	if(toggle1){
		document.getElementById('model__' + id).setAttribute('url','../sceneassets/images/772-Black-Stainless-Steel-Material-Metal-20171016151841.jpg');
	} else{
		document.getElementById('model__' + id).setAttribute('url','../sceneassets/images/0074-white-shiny-brushed-metal-texture-hr.jpg');
	}
}
var toggle2 = false;
function helmetMaterialToggle(id)
{ //console.log('inside materialToggle function');
	toggle2 = !toggle2;
	if(toggle2){
		document.getElementById('model__' + id).setAttribute('url','../sceneassets/images/dark-grey.jpg');
	} else{
		document.getElementById('model__' + id).setAttribute('url','../sceneassets/images/772-Black-Stainless-Steel-Material-Metal-20171016151841.jpg');
	}
}
var toggle3 = false;
function maceMaterialToggle(id)
{ //console.log('inside materialToggle function');
	toggle3 = !toggle3;
	if(toggle3){
		document.getElementById('model__' + id).setAttribute('url','../sceneassets/images/shiny-steel.jpg');
	} else{
		document.getElementById('model__' + id).setAttribute('url','../sceneassets/images/wood.jpeg');
	}
}
var toggle4 = false;
function swordMaterialToggle(id)
{ //console.log('inside materialToggle function');
	toggle4 = !toggle4;
	if(toggle4){
		document.getElementById('model__' + id).setAttribute('url','../sceneassets/images/Metal-Rust-Texture.jpg');
	} else{
		document.getElementById('model__' + id).setAttribute('url','../sceneassets/images/0074-white-shiny-brushed-metal-texture-hr.jpg');
	}
}

/**
 * Change the selected object of the swichting node
 * 
 * @param nodeId number: New node id to set (starting from 0, or -1 to hide all of them)
 */
function changeVisibleNode(nodeId)
{
	document.getElementById("switcher").setAttribute("whichChoice", nodeId);
}
// var spinning = false;

// function spin()
// {var spinning = false;
// 	console.log('entered spin function');
// 	spinning = !spinning;
// 	document.getElementById('model__RotationTimer').setAttribute('enabled', spinning.toString());
// }

// function stopRotation()
// {
// 	spinning = false;
// 	document.getElementById('model__RotationTimer').setAttribute('enabled', spinning.toString());
// }
/*The parameter indicates which model has been requested to animate itself.
 */

// var lightOn = true;

// function headlight()
// {
// 	lightOn = !lightOn;
// 	document.getElementById('model__headlight').setAttribute('headlight', lightOn.toString());
// }
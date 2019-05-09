// JavaScript Document
$(document).ready(function(){
    //AJAX service request to get the main text data from the json data store
    $.getJSON('assets/data.json', function(jsonObj) {
       //console.log(jsonObj);
       //homepage cards subheading and text
       $('#subHead1').html(jsonObj.pageTextData[0].subTitle);
       $('#shieldsInfo').html(jsonObj.pageTextData[0].description);
       $('#subHead2').html(jsonObj.pageTextData[1].subTitle);
       $('#helmetsInfo').html(jsonObj.pageTextData[1].description);
       $('#subHead3').html(jsonObj.pageTextData[2].subTitle);
       $('#macesInfo').html(jsonObj.pageTextData[2].description);
       $('#subHead4').html(jsonObj.pageTextData[3].subTitle);
       $('#swordsInfo').html(jsonObj.pageTextData[3].description);

       /*   REPLACED BY SQLI DATABASE */
    //    //shield model info
    //    $('#shieldModHead').html(jsonObj.pageTextData[4].x3dModelTitle);
    //    $('#shieldModDescrip').html(jsonObj.pageTextData[4].description);

    //    //helmet model info
    //    $('#helmetModHead').html(jsonObj.pageTextData[5].x3dModelTitle);
    //    $('#helmetModDescrip').html(jsonObj.pageTextData[5].description);
       
    //    //mace model info
    //    $('#maceModHead').html(jsonObj.pageTextData[6].x3dModelTitle);
    //    $('#maceModDescrip').html(jsonObj.pageTextData[6].description);

    //     //sword model info
    //     $('#swordModHead').html(jsonObj.pageTextData[7].x3dModelTitle);
    //     $('#swordModDescrip').html(jsonObj.pageTextData[7].description);
        
        //Gallery title and description
        $('#gallery_heading').html(jsonObj.pageTextData[8].galleryTitle); 
        $('#galleryDescrip').html(jsonObj.pageTextData[8].galleryDescription); 

        //Gallery images
        $('#gpic1').attr('src', jsonObj.pageTextData[9].galleryLink); 
        $('#gpic2').attr('src', jsonObj.pageTextData[10].galleryLink); 
        $('#gpic3').attr('src', jsonObj.pageTextData[11].galleryLink); 
        $('#gpic4').attr('src', jsonObj.pageTextData[12].galleryLink); 

        //X3d model paths
        $('#shieldX3d').attr('url', jsonObj.pageTextData[13].shieldX3dLink); 
        $('#helmetX3d').attr('url', jsonObj.pageTextData[13].helmetX3dLink); 
        $('#maceX3d').attr('url', jsonObj.pageTextData[13].maceX3dLink); 
        $('#swordX3d').attr('url', jsonObj.pageTextData[13].swordX3dLink); 
    });
});

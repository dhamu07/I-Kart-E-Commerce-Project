$(document).ready(function(){
    //Function
    tooltipshow();

    //Menu Js
    $('.menu_trigger').click(function(){
        $('body').toggleClass('sidebar_reduced');
        $('html').toggleClass('cm_overflow');

        tooltipshow();
    }); 

    $('.close_trigger, .cm-overlay').click(function(){
        $('body').removeClass('sidebar_reduced');
        $('html').removeClass('cm_overflow');
    }); 

    //DropDown js
    $('.dropdown-menu li a').click(function(){
        var drop_item = $(this).text()
        $(this).parents('.dropdown').find('.btn').text(drop_item);
    }); 
    
    //Tab js
    $('.cm_tab li a').click(function(){
        var tab_item = $(this).attr('data-tab')
        $('.' + tab_item).addClass('active').siblings('.cm_tab_contain').removeClass('active');
    });

    //Accordion Menu js
    $('.accordion_menu_wrap > a').click(function(){
        $(this).parents('.accordion_menu_wrap').find('.accordion_menu_info').slideToggle();
    });

    //Modal_menu js
    $('.top_menu ul li a').click(function(){
        $(this).addClass('active').parents('li').siblings().find('a').removeClass('active')
        var data_menu = $(this).attr('data-menu')
        $('.' + data_menu).slideToggle().siblings().hide();
        $('.third_menu div').hide();
        $('.sec_menu ul li a').removeClass('active');
    });

    $('.sec_menu ul li a').click(function(){
        $(this).addClass('active').parents('li').siblings().find('a').removeClass('active')
        var data_menu = $(this).attr('data-menu')
        $('.' + data_menu).slideToggle().siblings().hide();
        $('.third_menu ul li a').removeClass('active');
    });

    $('.third_menu ul li a').click(function(){
        $(this).addClass('active').parents('li').siblings().find('a').removeClass('active')
    });

    //Product path(Link) js
    var myModalEl = document.getElementById('product_list')
    myModalEl.addEventListener('hidden.bs.modal', function (event) {
        var first_menu = $('.top_menu ul li a.active').text();
        var sec_menu = $('.sec_menu ul li a.active').text();
        var third_menu = $('.third_menu ul li a.active').text();
        
        $('.catagory_parth').html('')

        if((first_menu.length > 0) && (sec_menu.length > 0) && (third_menu.length > 0)){
            var link = `<a href="#0">${first_menu}</a> <span>></span> <a href="#0">${sec_menu}</a> <span>></span> <a href="#0">${third_menu}</a>`;
        }
        else if((first_menu.length > 0) && (sec_menu.length > 0)){
            var link = `<a href="#0">${first_menu}</a> <span>></span> <a href="#0">${sec_menu}</a>`;
        }
        else{
            var link = `<a href="#0">${first_menu}</a>`;
        }

        $('.catagory_parth').html(link)

        var first_menu = '';
        var sec_menu = '';
        var third_menu = '';
    })

    //image upload js
    $('.upload_file input[type=file]').on('input change propertychange', function() {
        var file = $(this).get(0).files[0];
        
        if(file){
            var reader = new FileReader();
            var upload_main = $(this).parents('.upload_file');
            
            reader.onload = function(){
                upload_main.find('.previewImgs img').attr("src", reader.result);
            }
            reader.readAsDataURL(file);
        }

        var ext = $(this).val().split('.').pop().toLowerCase();

        if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
            $(this).parents('.upload_file').find('.previewImg').hide();
            $(this).parents('.upload_file').find('.plus_img').hide();
            $(this).parents('.upload_file').find('p.extraction').show();
        }
        else{
            $(this).parents('.upload_file').find('.previewImg').show();
            $(this).parents('.upload_file').find('.plus_img').hide();
            $(this).parents('.upload_file').find('p.extraction').hide();
        }
    });

    // video js
    $(".play").click(function(){
        $('.video_bm').find('video').get(0).play();
        $(this).hide();
    });

    var vids = $("video"); 
    $.each(vids, function(){
        this.controls = false; 
    }); 

    $("video").click(function() {
      //console.log(this); 
      if (this.paused) {
        this.play();
        $(this).parents('.video_bm').find('.play').hide();
      } else {
        this.pause();
        $(this).parents('.video_bm').find('.play').show();
      }
    }); 
});


 //Tooltips
 function tooltipshow(){
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))

    if( $('body').hasClass('sidebar_reduced') ){
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
          })
    }
    else{
        $('[data-bs-toggle="tooltip"]').tooltip('dispose') 
    }
}

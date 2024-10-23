// custom js
/* Open */
function openNav() {
  document.getElementById("myNav").style.height = "100%";
}
/* Close */
function closeNav() {
  document.getElementById("myNav").style.height = "0%";
}
jQuery('#myNav a').click(function () {   // закрываем по нажатию 
	document.getElementById("myNav").style.height = "0%";
});
/* NAVBAR SCROLL */
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if ((prevScrollpos > currentScrollPos) || (jQuery(this).scrollTop() < 50)) {
    document.getElementById("top-menu").style.top = "0";
  } else {
    document.getElementById("top-menu").style.top = "-50px";
  }
  prevScrollpos = currentScrollPos;
}
jQuery(window).scroll(function() {
  if(jQuery(this).scrollTop() > 100) {
      jQuery('#top-menu').addClass('small-nav');
  } else {
     jQuery('#top-menu').removeClass('small-nav');
  }
});
/* END NAVBAR SCROLL */
/* Selected files */
function uploadFiles() {
	if (jQuery("input").is(".inputfile")) {
		var inputs = document.querySelectorAll( '.inputfile' );
		Array.prototype.forEach.call( inputs, function( input )
		{
			var label	 = input.nextElementSibling,
				labelVal = label.innerHTML;

			input.addEventListener( 'change', function( e )
			{
				var fileName = '';
				if( this.files && this.files.length > 1 )
					fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
				else
					fileName = e.target.value.split( '/' ).pop();

				if( fileName )
					label.querySelector( 'span' ).innerHTML = fileName;
				else
					label.innerHTML = labelVal;
			});
		});
	}
}
/* end Selected files */


/* LIGHT GALLERY */
if (jQuery("div").is(".gallery")) {
	jQuery('body').append('<div id="view-gallery" style="display: none;"><div class="big-image"><img src="" alt="" /></div><a href="#" class="prev-gal"></a><a href="#" class="next-gal"></a></div>'); 
	var count = jQuery('.gallery a').length - 1; // считаем кол-во изображений
	var arr = []; // создаем масив
	jQuery('.gallery a').each(function(i) { // номеруем изображения добавляя "data-id=0"
		var number = i;
		jQuery(this).attr('data-id', number);
		i++;
		arr.push(jQuery(this).attr('href')); // наполняем масив ссылками на изображения
	});
	var visible = false;
	jQuery('.gallery a').click(function () { 

		var activeImg = jQuery(this).attr('data-id');  // текушее изображение
		var img = arr[jQuery(this).attr('data-id')];  // ссылка на текушее изображение

		if(visible) { // скрываем по нажатию на картинку
			document.getElementById('view-gallery' ).style.display = 'none';
			visible = false;
		} else { // открываем по нажатию на картинку
			document.getElementById('view-gallery' ).style.display = 'block';
			visible = true;
			jQuery(".big-image img").attr({ src: img }); // вставляем ссылку в тег img
		}

		function next(){    

			if (activeImg != count){         // если не последнее фото    

				activeImg++;    // плюсуем номер
				var nextSrc = arr[activeImg]; // получаем ссылку носледующее изображение

			}else{    // если последнее фото

				var nextSrc = arr[0];  // переходим в начало
				activeImg = 0; // обнуляем счетчик

			}
			jQuery('.big-image img').attr({ src: nextSrc });                    // вставляем фото
			return false;
		}
		function prev(){                                  

			if (activeImg != 0){                                     

				activeImg--;
				var prevSrc = arr[activeImg];

			}else{    

				var prevSrc = arr[count];
				activeImg = count;

			}
			jQuery('.big-image img').attr({ src: prevSrc });                   
			return false;
		}
		document.onkeydown = function (e) {  // управление стрелками
			var keyCode = e.keyCode;
			if(keyCode == 37) {
				prev();
			}
			if (keyCode == 39){
				next();
			}
		};
		jQuery('.next-gal').click(next);   // управление ссылками

		jQuery('.prev-gal').click(prev);

		return false;
	})    
	jQuery('#view-gallery .big-image').click(function () {   // закрываем галерею по нажатию на блок
		if(visible) {
			document.getElementById('view-gallery' ).style.display = 'none';
			visible = false;
		}
	});
}
/* END LIGHT GALLERY */

// Ajax form
$(function() {
	$('form').submit(function(e) {
		var $form = $(this);
		$.ajax({
			type: $form.attr('method'),
			url: $form.attr('action'),
			data: $form.serialize(),
			success: function(resp) {
				jQuery('#modal_block').addClass('openPopUp');
				document.getElementById("form_block").innerHTML = resp;
				console.log(resp);
			},
			error: function() {
				document.getElementById("form_block").innerHTML = resp;
				console.log(resp);
				alert("Ваше сообщение не отпрвлено!");
			}
		});
		//отмена действия по умолчанию для кнопки submit
		e.preventDefault(); 
	});
});
// end Ajax form

/* JQUERY MASK FOR PHONE */
// function maskInput() {
// 	jQuery.mask.definitions['~']='[+-]';
// 	jQuery("input[name='phone']").mask("+38(999) 999-99-99");
// }
/* END JQUERY MASK FOR PHONE */

/* dropdown lang */
function dropdown() {
  document.getElementById("dropdownlang").classList.toggle("show");
}
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
/* emd dropdown lang */
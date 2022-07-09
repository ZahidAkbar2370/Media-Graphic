jQuery(document).ready( function($){
	$( ".commander aside" ).draggable();
	var title = $('.commander h1').text();
	$('.commander aside h2 span').text(title);
	$('.autre-format li').click( function(){
		$('.autre-format li').removeClass('selected');
		$(this).addClass('selected');
	});
	$('.defini').click( function(){
		$('.size-entries').addClass('hide');
		var l = $(this).find('.largeur').text();
		var h = $(this).find('.hauteur').text();
		$('.size-entries input[name="largeur"]').val(l);
		$('.size-entries input[name="hauteur"]').val(h);
	});
	$('.perso').click( function(){
		$('.size-entries').removeClass('hide');
		$('.size-entries input').val('00,00');
	});
	$('input[name=format]').click( function () {
		var vl = $(this).val();
		if (vl == 'Autre format') {
			$('.autre-format').removeClass('hide');
		} else {
			$('.autre-format, .size-entries').addClass('hide');
		}
	});
	$('.ques-wrapper').click( function(){
		$('.ques-wrapper').removeClass('opned');
		$(this).addClass('opned');
	});
	$('input[name=cartouche]').click( function(){
		var c = $(this).val();
	
		
		if (c == 'oui') {
			$('.cartouche .note').removeClass('hide');
		} else {
			$('.cartouche .note').addClass('hide');
		}
	});
	$('input[name=paiement]').click( function(){
		var c = $(this).val();
		if (c == 'card') {
			$('.paiement > div.card').removeClass('hide');
			$('.add-to-cart button i').attr('class','far fa-credit-card');
		} else {
			$('.paiement > div.card').addClass('hide');
			$('.add-to-cart button i').attr('class','fab fa-paypal');
		}
	});
	$('.table .row').click( function(){
		$(this).find('.qte').addClass('selected');
		var qt = $(this).find('.qte').text();
		$('#product_quantity').val(qt);
// alert(qt);
		$('aside td.qte').text(qt);
	});
	$('.infos select[name=structure]').change( function(){
		var h = $('.infos select[name=structure]').val();
		
		if (h == 'Autre') {
			$('input[name=autre-structure]').removeClass('hide');
		} else {
			$('input[name=autre-structure]').addClass('hide');
		}
	});
	$('.infos input[name=adresse-identique]').click( function(){
		var al = $('.infos input[name=adresse-livraison]').val();
		var cl = $('.infos input[name=code-postal-livraison]').val();
		var vl = $('.infos input[name=ville-livraison]').val();
		$('.infos input[name=adresse-faturation]').val(al);
		$('.infos input[name=code-postal-facturation]').val(cl);
		$('.infos input[name=ville-facturation]').val(vl);
	});

	//
	var q = $('.commander .table .qte.selected').html();
	$('.commander form aside table .item .qte').html(q);
	var p = $('.commander .price.j2.selected').html();

	var ht = parseFloat(p);

	
	$('#product_cart_tva').val(ht);
	// alert(ht);
	$('.commander form aside table .item .prix').html(ht.toFixed(2)+' <span class="currency">€</span>');
	var tva = Math.round((ht * 20) / 100);
	$('#product_cart_totlettc').val(tva);

// alert(tva);
	var ttc = ht + tva;
	$('.commander .tax-tva .prix').text(tva.toFixed(2)+' €');
	$('.commander .total .prix').text(ttc.toFixed(2)+' €');
	var d = $('.commander .row.date .selected').text();
	$('.commander livraison-date .date').text(d);
	//

	$('.price').click( function(){
		$('.table .row div').removeClass('selected');
		var j = $(this);
		if (j.hasClass('j2')) {
			$(j).addClass('selected');
			$('.date .j2').addClass('selected');
			// alert(j);

		} else if (j.hasClass('j3')) {
			$(j).addClass('selected');
			$('.date .j3').addClass('selected');
		} else if (j.hasClass('j4')) {
			$(j).addClass('selected');
			$('.date .j4').addClass('selected');
		} else if (j.hasClass('j5')) {
			$(j).addClass('selected');
			$('.date .j5').addClass('selected');
		}
		var jj = $(j).text();
		$('.item td.prix').text(jj);
		var ht = parseFloat(jj);
		$('#product_cart_totalht').val(ht);

		// alert(ht);
		var tva = Math.round((ht * 20) / 100);
		$('#product_cart_totalht').val(tva);

		// alert(tva);
		var ttc = ht + tva;
		$('.tax-tva .prix').text(tva.toFixed(2)+' €');
		$('.total .prix').text(ttc.toFixed(2)+' €');
		// alert(ttc);
		$('#product_cart_totlettc').val(ttc);

		var d = $('.row.date .selected').text();
		$('#product_Cart_date').val(d);
		$('#no_of_copies').val($('.qte.selected').text());

		// alert(d);
		$('.livraison-date .date').text(d);
	});
	$('.table').find(".row").each(function (){
		var j2 = parseFloat($(this).find('.price.j2').text());
		var j3 = j2 * 0.95;
		var j4 = j2 * 0.87;
		var j5 = j2 * 0.83;
		$(this).find('.price.j2').text(j2.toFixed(2));
		$(this).find('.price.j3').text(j3.toFixed(2));
		$(this).find('.price.j4').text(j4.toFixed(2));
		$(this).find('.price.j5').text(j5.toFixed(2));
	});
	$('.table .price').append(' <span class="currency">€</span>');

	$(window).scroll(function() {    
	  var scroll = $(window).scrollTop();

	  if (scroll >= 100) {
		  jQuery(".commander aside, .panier aside").addClass('sticky');
	  } else {
		  jQuery(".commander aside, .panier aside").removeClass('sticky');
	  }
	});
	$('.menu-toggle a').click( function () {
		$('header .logo').toggleClass('logo-mobile');
		$('header nav').toggleClass('show');
		$('.menu-toggle').toggleClass('close');
	});
	$('#modes-paiement a.add-new').click( function(){
		$('#modes-paiement form').removeClass('hide');
	});

	/*$('.price').text(function () { 
		var str = $(this).html() + ''; 
		x = str.split('.'); 
		x1 = x[0]; x2 = x.length > 1 ? ',' + x[1] : ''; 
		var rgx = /(\d+)(\d{3})/; 
		while (rgx.test(x1)) { 
			x1 = x1.replace(rgx, '$1' + ' ' + '$2'); 
		} 
		$(this).html(x1 + x2); 
	});*/
	

	/*var myCurrentDate=new Date();
	var date2Jrs=new Date(myCurrentDate);
    var jrs2= date2Jrs.setDate(date2Jrs.getDate() + 2).toDateString();//myPastDate is now 8 days in the past
    var date3Jrs=new Date(myCurrentDate);
    var jrs3= date3Jrs.setDate(date3Jrs.getDate() + 3).toDateString();//myPastDate is now 8 days in the past
    var date4Jrs=new Date(myCurrentDate);
    var jrs4= date4Jrs.setDate(date4Jrs.getDate() + 4).toDateString();//myPastDate is now 8 days in the past
    var date5Jrs=new Date(myCurrentDate);
    var jrs5= date5Jrs.setDate(date5Jrs.getDate() + 5).toDateString();//myPastDate is now 8 days in the past

    //console.log(myDate.toLocaleString());

    $('.j2').text(jrs2);
    $('.j3').text(jrs3);
    $('.j4').text(jrs4);
    $('.j5').text(jrs5);*/
});
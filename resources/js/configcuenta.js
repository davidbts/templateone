document.addEventListener('DOMContentLoaded',() => {
  dates('option');
  months('option');
  years('option', 1900, 2021);
//  document.querySelector('.bear-dates').addEventListener('click', onClickHandler);
//  document.querySelector('bear-dates').addEventListener('mousedown', onMouseDownHandler);


});


function onMouseDownHandler(e){
	var el = e.currentTarget;

    if(el.hasAttribute('size') && el.getAttribute('size') == '1'){
    	e.preventDefault();
    }
}
function onClickHandler(e) {
 	var el = e.currentTarget;

    if (el.getAttribute('size') == '1') {
        el.className += " selectOpen";
        el.setAttribute('size', '4');
    }
    else {
        el.className = '';
        el.setAttribute('size', '1');
    }
}

/*!
 * Copyright (C) 2017 ProgrammersNG.  All rights reserved.
 * This file is an original work developed by ProgrammersNG
 */


//Calender start
//Date method
function dates(tags){
  //If the dates('') paramenter is empty, add no tags
		if(tags == ''){
			var dates = "";
			var i;
			for (i = 1; i < 32;  i++ ){
				dates += i;
			}
		}
		//If the dates('option') has paramenter, add the tags to it
		else{
			var dates = "";
			var i;
			for (i = 1; i < 32;  i++ ){
				dates += "<" + tags +">" + i +"</" + tags +">";
			}
		}

	//You can call the class multiple times
    var multiple_list = document.getElementsByClassName("bear-dates");
    for (i = 0; i < multiple_list.length; i++){
    	multiple_list[i].innerHTML += dates;
    }
}

//Days method
function days(tags){
	//List all the Days with array
	var list_days = [
						'Lunes',
						'Martes',
						'Miercoles',
						'Jueves',
						'Viernes',
						'Sabados',
						'Domingo'
					];
    //If the days('') paramenter is empty, add no tags
		if(tags == ''){
			var i;
			for (i = 0, l = list_days.length, days = ""; i < l; i++){
				days += list_days[i];
			}
		}
		//If the days('option') has paramenter, add the tags to it
		else{
			for (i = 0, l = list_days.length, days = ""; i < l; i++){
				days += "<" + tags +">" + list_days[i] + "</" + tags +">";
			}
		}
	//You can call the class multiple times
    var multiple_list = document.getElementsByClassName("bear-days");
    for (i = 0; i < multiple_list.length; i++){
    	multiple_list[i].innerHTML = days;
    }
}

//Short Days method
function short_days(tags){
	//List all the Days with array
	var list_days = [
						'Lun',
						'Mar',
						'Mie',
						'Jue',
						'Vie',
						'Sab',
						'Dom'
					];
    //If the short_days('') paramenter is empty, add no tags
		if(tags == ''){
			var i;
			for (i = 0, l = list_days.length, days = ""; i < l; i++){
				days += list_days[i];
			}
		}
		//If the days('option') has paramenter, add the tags to it
		else{
			for (i = 0, l = list_days.length, days = ""; i < l; i++){
				days += "<" + tags +">" + list_days[i] + "</" + tags +">";
			}
		}

	//You can call the class multiple times
    var multiple_list = document.getElementsByClassName("bear-short-days");
    for (i = 0; i < multiple_list.length; i++){
    	multiple_list[i].innerHTML = days;
    }
}

//Months method
function months(tags){
	//List all the Days with array
	var list_months = [
                        'Enero',
                        'Febrero',
                        'Marzo',
                        'Abril',
                        'Mayo',
                        'Junio',
                        'Julio',
                        'Agosto',
                        'Septiembre',
                        'Octubre',
                        'Noviembre',
                        'Diciembre'
					];

    //If the months('') paramenter is empty, add no tags
		if(tags == ''){
			var i;
			for (i = 0, l = list_months.length, months = ""; i < l; i++){
				months += list_months[i];
			}
		}
		//If the months('option') has paramenter, add the tags to it
		else{
			for (i = 0, l = list_months.length, months = ""; i < l; i++){
				months += "<" + tags +" value = "+(i+1)+">" + list_months[i] + "</" + tags +">";
			}
		}

	//You can call the class multiple times
    var multiple_list = document.getElementsByClassName("bear-months");
    for (i = 0; i < multiple_list.length; i++){
    	multiple_list[i].innerHTML += months;
    }
}



//Short Months method
function short_months(tags){
	//List all the Months with array
	var list_months = [
                        'Ene',
                        'Feb',
                        'Mar',
                        'Abr',
                        'May',
                        'Jun',
                        'Jul',
                        'Ago',
                        'Sep',
                        'Oct',
                        'Nov',
                        'Dic'
					];
    //If the short_months('') paramenter is empty, add no tags
		if(tags == ''){
			var i;
			for (i = 0, l = list_months.length, months = ""; i < l; i++){
				months += list_months[i];
			}
		}
		//If the months('option') has paramenter, add the tags to it
		else{
      for (i = 0, l = list_months.length, months = ""; i < l; i++){
				months += "<" + tags +">" + list_months[i] + "</" + tags +">";
			}
		}

	//You can call the class multiple times
    var multiple_list = document.getElementsByClassName("bear-short-months");
    for (i = 0; i < multiple_list.length; i++){
    	multiple_list[i].innerHTML = months;
    }
}

//Year method
function years(tags, startY, endY){
  //If the years('') paramenter is empty, add no tags
		if(tags == ''){
			var years = "";
			for (i = startY; i < endY + 1;  i++ ){
				years += i;
			}
		}
		//If the years('option') has paramenter, add the tags to it
		else{
			var years = "";
			for (i = endY; i > startY + 1;  i-- ){
				years += "<" + tags +">" + i +"</" + tags +">";
			}
		}

	//You can call the class multiple times
    var multiple_list = document.getElementsByClassName("bear-years");
    for (i = 0; i < multiple_list.length; i++){
    	multiple_list[i].innerHTML += years;
    }
}
//Calender end

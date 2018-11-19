

    function P_job(date, post_title, location, price) {
        this.date = randomDate(new Date(2018, 0, 1), new Date()); 
        this.post_title = post_title; 
        this.location = location; 
        this.price = price; 
    }

    P_job.prototype.toString = function() {
    return "Title: " + this.post_title + " --- Date: " + this.date 
	+ " --- Address: " + this.location + " --- Price: $" + this.price + "";
    };

    function V_job(date, post_title, location, price) {
        this.date = randomDate(new Date(2018, 0, 1), new Date()); 
        this.post_title = post_title; 
        this.location = location; 
        this.price = price; 
    }
	
	 V_job.prototype.toString = function() {
    return "Title: " + this.post_title + " --- Date: " + this.date 
	+ " --- Address: " + this.location + " --- Price: $" + this.price + "";
    };

                                    
    var p_job1 =  new P_job(randomDate(new Date(2018, 0, 1), new Date()), "Deck cleaning", "1303 Wertland Street A6", "20");
    var p_job2 =  new P_job(randomDate(new Date(2018, 0, 1), new Date()), "whole apartment", "1303 Wertland Street A6", "50");
	var p_job3 =  new P_job(randomDate(new Date(2018, 0, 1), new Date()), "kitchen, bathrooms, bedrooms", "1303 Wertland Street A6", "40");
    
    var posts = new Array(p_job1.toString(), p_job2.toString(), p_job3 );


    var v_job1 = new V_job (randomDate(new Date(2018, 0, 1), new Date()), "All house bathrooms", "66 Jefferson Park Avenue", "0");
    var v_job2 = new V_job (randomDate(new Date(2018, 0, 1), new Date()), "Upstairs floor cleaning", "445 Jefferson Park Avenue", "20");
    var v_job3 = new V_job (randomDate(new Date(2018, 0, 1), new Date()), "Main floor cleaning", "333 16th Street", "30");
    var v_job4 = new V_job (randomDate(new Date(2018, 0, 1), new Date()), "Deck cleaning", "554 Rugby Road", "60");
    var v_job5 = new V_job (randomDate(new Date(2018, 0, 1), new Date()), "Balcony and kitchen", "John Street", "0");
    var v_job6 = new V_job (randomDate(new Date(2018, 0, 1), new Date()), "Basic apartment cleaning", "560 14th Street", "30");


    var views = new Array();
    views.push(v_job1.toString());
    views.push(v_job2.toString());
    views.push(v_job3.toString());
    views.push(v_job4.toString());
    views.push(v_job5.toString());
    views.push(v_job6.toString());

//var random = Math.random() * (+max - +min) + +min; 

function randomDate(start, end) {
    return new Date(start.getTime() + Math.random() * (end.getTime() - start.getTime()));
}



function makeUL1() {
    var ul = document.createElement('ul');
    document.getElementById('demo1').appendChild(ul);

    posts.forEach(function(name){
        var li = document.createElement('li');
        ul.appendChild(li);
        li.innerHTML += name;
    });
}

function makeUL2() {
    var ul = document.createElement('ul');
    document.getElementById('demo2').appendChild(ul);

    views.forEach(function(name){
        var li = document.createElement('li');
        ul.appendChild(li);
        li.innerHTML += name;
    });
}




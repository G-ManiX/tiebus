//																//
// 					Tiebus.com All rights reserved				//
//						Author : Ally Mohammed					//
//																//
//////////////////////////////////////////////////////////////////

/* The Animator Object Base Class */
var Animator = function(selector) {
	this.elem = selector;
}

Animator.prototype = {
	elem : {
		value: null
	},
	xPos : null,
	intDelay: {
		value: null,
		writable: true
	}
}

Animator.prototype.isScroll = function(intPosition) {
	if( intPosition !== 0 ) {
		this.show(intPosition);
	}	
}

/********************************************************************/
var Mission = function(selector,intPos){
	Animator.call(this,selector);
	this.xPos = intPos;
}

// Prototyping with the Animator Prototype
Mission.prototype = Object.create(Animator.prototype, {
	show : { 
		value : function(position) {
			if (position >= this.xPos) {
				this.elem.style.left = "0";
			}
		},
		enumerable: true, 
    	configurable: true, 
    	writable: true
	}
});
// Constructor for the Mission Object
Mission.prototype.constructor = Mission;

/********************************************************************/

var Vision = function(selector,intPos){
	Animator.call(this,selector);
	this.xPos = intPos;
}
// Prototyping with the Animator Prototype
Vision.prototype = Object.create(Animator.prototype, {
	show : { 
		value : function(position) {
			if (position >= this.xPos) {
				this.elem.style.right = "0";
			}
		},
		enumerable: true, 
    	configurable: true, 
    	writable: true
	}
});
// Constructor for the Vision Object
Vision.prototype.constructor = Vision;

/*********************************************************************/

var Navigation = {
	element: null,
	setElement: function(arrayElem) {
		this.element = arrayElem;
	},
	getElement: function() {
		return this.element;
	},
	retrieveItem: function(elem,index,arr) {
		var initial = "0px";
		arr[index].style.opacity = "1";
		arr[index].style.left = initial;
		arr[index].style.top = initial;
	},
	hideItem: function(elem,index,arr) {
		arr[index].style.left = "-1100px";
		arr[index].style.top = "300px";
	},
	resetItemPos: function(elem,index,arr) {
		arr[index].style.opacity = "0";
		setTimeout(function(){
			arr[index].style.display = "";
			arr[index].style.left = "";
			arr[index].style.top = "";
		},2500,arr,index);
	},
	/* Mobile device Navigation menu methods */
	extendNav: function(mobile) {
		var arrOfDiv = mobile.children;
		for (var i = 0; i < arrOfDiv.length; i++) {
			arrOfDiv[i].style.left = "0";
		}
	},
	retractNav: function(mobile) {
		var arrOfDiv = mobile.children;
		for (var i = 0; i < arrOfDiv.length; i++) {
			arrOfDiv[i].style.left = "-130px";
		}
	}
}

/*********************************************************************/

var Chevron = {
	animate: function(jqObj) {
		setInterval(function() {
			jqObj.each(function() {
				jqObj.animate({
					opacity: 0.9
				},{
					duration: 200,
					step: function() {
						jqObj.animate({
							opacity: 0.3
						},150)
					}
				})
			})
		},50)
	}
}

/**********************************************************************/

function toggleMenu(event) {
	if(button.dataset.navToggle == "show") {
		Navigation.getElement().forEach(Navigation.retrieveItem);
		Navigation.extendNav(mobile);
		button.dataset.navToggle = "hide";
		return;
	}
	Navigation.getElement().forEach(Navigation.hideItem);
	Navigation.retractNav(mobile);
	button.dataset.navToggle = "show";
	Navigation.getElement().forEach(Navigation.resetItemPos);
}
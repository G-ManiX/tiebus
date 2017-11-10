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
	currentPositionLeft: null,
	currentPositionTop: null,
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

/************************************************************************/

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
		console.log(arr[index]);
	},
	hideItem: function(elem,index,arr) {
		arr[index].style.left = "-1100px";
		arr[index].style.top = "300px";
		console.log(arr[index]);
	},
	resetItemPos: function(elem,index,arr) {
		arr[index].style.opacity = "0";
		setTimeout(function(){
			arr[index].style.display = "";
			arr[index].style.left = "";
			arr[index].style.top = "";
			console.log();
		},2500,arr,index);
	}
}

/***************************************************************/

var Chevron = function(selector,intDelay) {
	Animator.call(this,selector);
	this.intDelay = intDelay;
}

Chevron.prototype = Object.create(Animator.prototype, {
	status: {
		value: null,
		writable: true,
		enumerable: true,
		configurable: true,
	},
	bool: {
		value: true,
	},
	start: {
		value: function() {
			//while(this.bool){
				var target = this.elem.getElementsByTagName("i");
				for (var i; i < target.length; i++) {
					this.animate(target[i]);
					console.log(target[i]);
				}
				//
			//}
		},
		writable: true,
		configurable: true
	},
	animate: {
		value: function(element){
			setTimeout(this.changeOpUp,5000,element);
			setTimeout(this.changeOpDown,10000,element);
		}
	},
	changeOpUp: {
		value: function(i) {
			i.style.opacity = "1";
		}
	},
	changeOpDown: {
		value: function(i) {
			i.style.opacity = "0.3";
		}
	}
});

Chevron.prototype.constructor = Chevron;

/**********************************************************************/

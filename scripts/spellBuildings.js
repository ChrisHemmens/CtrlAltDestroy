   function SpellBuilding(){
      this.name = 'Parent';
      this.level = 0;
      this.imagePath = '';
      this.smallImagePath = '';
      this.boostFactor = 4;
      this.boosted = false;
      this.boostDuration = 7200;
	  this.capacity = 0;
	  this.availableCapacity = 0;

      //cookie related functions
      this.setCookie = function(cookieName, cookieValue){
         var fullCookieName = this.name + '_' + cookieName;
         setCookie(fullCookieName,cookieValue);
      }

      this.retrieveCookie = function(cookieType, defaultValue){
         var cookieName = this.name + '_' + cookieType;
         var cookieLevel = getCookie(cookieName);
         if(isNaN(cookieLevel)){
            return defaultValue;
         }else{
            return Number(cookieLevel);
         }
      }
   }

   function SpellFactory(){
      SpellBuilding.call(this);
      //static attributes
      this.name = 'SpellFactory';
      this.imagePath = 'images/lightning';

      //level based attributes
      this.setLevel = function(level){
         this.level = level;
         this.setCookie('level',level);
         switch(level){
            case 1:
               this.capacity = 2;
               this.availableCapacity = 2;
               this.smallImagePath = 'http://i.imgur.com/IW1I5m1.png';
               break;
            case 2:
               this.capacity = 4;
               this.availableCapacity = 4;
               this.smallImagePath = 'http://i.imgur.com/6FzH2mc.png';
               break;
            case 3:
               this.capacity = 6;
               this.availableCapacity = 6;
               this.smallImagePath = 'http://i.imgur.com/dq9fGRl.png';
               break;
            case 4:
               this.capacity = 8;
               this.availableCapacity = 8;
               this.smallImagePath = 'http://i.imgur.com/n9TYJ7a.png';
               break;
            case 5:
               this.capacity = 10;
               this.availableCapacity = 10;
               this.smallImagePath = 'http://i.imgur.com/GbHCJHu.png';
               break;
            default:
               this.capacity = 0;
               this.availableCapacity = 0;
               this.smallImagePath = 'http://i.imgur.com/IW1I5m1.png';
               break;
         }
      }
   }
   

   function DarkSpellFactory(){
      SpellBuilding.call(this);
      //static attributes
      this.name = 'DarkSpellFactory';
      this.imagePath = 'images/lightning';

      //level based attributes
      this.setLevel = function(level){
         this.level = level;
         this.setCookie('level',level);
         switch(level){
            case 1:
               this.capacity = 1;
               this.availableCapacity = 1;
               this.smallImagePath = 'http://i.imgur.com/IW1I5m1.png';
               break;
            case 2:
               this.capacity = 1;
               this.availableCapacity = 1;
               this.smallImagePath = 'http://i.imgur.com/6FzH2mc.png';
               break;
            case 3:
               this.capacity = 1;
               this.availableCapacity = 1;
               this.smallImagePath = 'http://i.imgur.com/dq9fGRl.png';
               break;
            default:
               this.capacity = 0;
               this.availableCapacity = 0;
               this.smallImagePath = 'http://i.imgur.com/IW1I5m1.png';
               break;
         }
      }
   }
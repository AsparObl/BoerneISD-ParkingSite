<?php ?>

<!DOCTYPE html>
<html>
<!--THIS IS THE LENGTH OF PARKING LOT 2 FROM TOP LEFT TO BOTTOM RIGHT spacest :1633px-->
<head>
  <title>CHS Parking Lot Selection</title>
  <link rel="shortcut icon" href="https://www.boerneisd.net/cms/lib/TX50000022/Centricity/Template/GlobalAssets/images///logos/CHS%20transparent.png" type="image/x-icon">
  
  <style>
/*Default settings for css alignments and styles*/
* {
	box-sizing: border-box;
	margin: 0;
	font-family: 'Source Sans Pro', 'Arial', sans-serif;
}

body {
	min-width: 750px;
  padding-bottom: 20px;
}

.body-grid {
	display: grid;
	grid-template: 150px auto 200px/ 200px 1fr;
}
    
.bgItem {
	border: 2px solid #000080;
}

.h-grid {
	grid-column: 1 / 3;
	display: grid;
	grid-template: auto / auto 1fr;
}

.left-bar {
	display: grid;
	grid-template: 50px 1fr / 100%;
  background-color: silver;
}

.hgItem, .lbItem {
	margin: auto 0;
}

.h-img {
	width: 180px;
  height: 150px;
}

.h-text {
	font-size: 50px;
}

.lot-swap {
	height: 50px;
  font-size: 17px;
  color: white;
  background-color: navy;
  /*transition: 150ms;
  This can be changed later for a button style transition,
  but it makes the button appear buggy on some devices*/
}
    
.lot-swap:hover {
	background-color: rgb(0, 0, 97);
  transform: scale(0.97);
}

.color-key {
	margin: 5px 5px;
}

.color-key, 
  .color-key td {
	border: 1px solid black;
  border-width: 1px 2px;
	border-collapse: collapse;
  text-align: center;
 	font-size: 17.75px;
  width: 95%;
  height: 47.75px;
}

/*//////////////////////////////////////////////////////////////*/

.color-key th {
  border-top: 2px solid black;
	font-size: 25px;
  font-style: bold;
  background-color: #d9d9d9;
  padding: 15px 15px;
}

.blue {
	background-color: #1a75ff;
}
    
.green {
	background-color: #009900;
}
    
.yellow {
	background-color: yellow;
}
    
.red {
	border-bottom: 2px solid black;
	background-color: grey;
}

.left {
	float: left;
  text-align: left;
}
    
.right {
	float: right;
  text-align: right;
}

/*//////////////////////////////////////////////////////////////*/

.lot-sect {
	overflow: hidden;
  width: auto;
  height: auto;
  position: relative;
}

.lot-img {
	width: 100%;
  height: auto;
  z-index: -2;
}

.l2g button, .l3g button {
	text-align: auto;
  width: 1fr;
  height: 1fr;
  background-color: rgba(255, 255, 255, 0.3);
  font-size: 10px;
  padding: 0;
}

.l2g {
  visibility: visible;
	z-index: 0;
}

.l3g {
	visibility: hidden;
  z-index: -1;
}

.l2g, .l3g, .l2d1, .l2d2, .l3d1 {
	display: grid;
  position: absolute;
}

.l2d1 {
	grid-column: 3 / 4;
  grid-row: 27 / 39;
}

.l2d2 {
	grid-column: 15 / 18;
	grid-row: 57 / 79;
}

.l3d1 {
	grid-column: 19 / 20;
  grid-row: 1 / 53;
}

.bottom {
	grid-column: 1 / 3;
	height: 200px;
  width: auto;
  background-color: white;
  display: grid;
  grid-template: 1fr 1fr / 1fr 1fr;
  border: 2px solid black;
}
    
.bottom div {
	/*:D*/
}
   
.left-footer {
  grid-row: 1 / 3;
  grid-column: 1 / 2;
}
    
.right-footer {
	grid-column: 2 / 3;
  grid-row: 1 / 2;
}
    
.right-footer2 {
	grid-column: 2 / 3;
  grid-row: 2 / 3;
}
    
.bot-links {
	color: navy;
  text-decoration: none;
}
    
  </style>
</head>
<body>
  <!--Grid for the main body of the website-->
  <div class="body-grid">
    <div class="h-grid bgItem">
    <img class="h-img hgItem" src="https://www.boerneisd.net/cms/lib/TX50000022/Centricity/Template/GlobalAssets/images///logos/CHS%20transparent.png" alt="CHS Parking Lots"/>
      
      <!--Could add a BHS-stylized format starting here-->
      
      <h1 class="h-text hgItem">CHS Parking Registration</h1>
    </div><!--end h-grid-->
    
    <!--Left navbar/grid key container-->
    <div class="left-bar bgItem">
      <button class="lot-swap lbItem" type="button" onclick="switchLot()">Click to Show Lot 3</button>
     
      <!--Color Key for the Parking Spots-->
      <table class="color-key">
        
        <th>Grid Key</th>
        
        <tr class="blue">
          <td>Currently Selected</td>
        </tr>
        
        <tr class="green ">
          <td>Available</td>
        </tr>
        
        <tr class="yellow">
          <td>Pending</td>
        </tr>
        
        <tr class="red">
          <td>Unavailable</td>     
        </tr>
          
      </table>
      
      <button class="lot-swap">Submit</button>
    </div><!--end left-bar-->
    <!--Parking lot/button grid image container-->
    <div class="lot-sect bgItem">
      
      <div class="l2g">
        <div class="l2d1"></div>
        <div class="l2d2"></div>
      </div>
      <div class="l3g">
        <div class="l3d1"></div>
      </div>
      
      <img class="lot-img"  src="http://parking.bisdcs.com/images/ChampionLot2.jpg" alt="CHS Parking Lot 2"/>
    </div><!--end lot-sect-->
    
    <div class="bottom">
      
      <div class="left right-footer">
        
      </div>
      
      <div class="left left-footer">
        <h3>BOERNE INDEPENDENT SCHOOL DISTRICT</h3>
        <br/>
        <p>If you have any questions or concerns please contact us from here:</p>
        <br/>
        <a class="bot-links" href="https://www.boerneisd.net/">BISD Website</a>
      </div>
      
      <div class="left right-footer2">
      </div>
      
    </div><!--end footer-->
    
  </div><!--end body-grid-->
  
  <script>
    //Element-factory style button creation for the grids
    function createButtons(buttonNum, numStart, gridEl, gridArr, colStartArr, rowSkips) {
      let arrInd = 0;
      let rowSkipInd = 0;
      let skipRow = true;
      let gridC = 1;
      let colSubtractor = 0;
      let rowSkipCount = 0;
      for(let buttons = 1; buttons <= buttonNum; buttons++) {
        const pButton = document.createElement("button");
        pButton.id = "" + (buttons + numStart - 1);
        
        if(buttons > colSubtractor + gridArr[arrInd]) {
          colSubtractor += gridArr[arrInd];
          
          if(skipRow == true) {
            gridC++;
          }
          gridC++;
          
          skipRow = !skipRow;
          arrInd++;
          rowSkipInd = 0;
          rowSkipCount = 0;
        }
        let colVal = colStartArr[arrInd];
        
        if(buttons - colSubtractor == Math.floor((rowSkips[arrInd][rowSkipInd]) / 10)) {
          rowSkipCount += rowSkips[arrInd][rowSkipInd] % 10;
          rowSkipInd++;
        }
        
        pButton.style.gridRow = ((buttons - colSubtractor + colVal + rowSkipCount) * 2 - 1) + "/" + ((buttons - colSubtractor + colVal + rowSkipCount) * 2 + 1);
        pButton.style.gridColumn = (gridC) + "/" + (gridC + 1);
        
        pButton.onfocus = () => {
          pButton.style.backgroundColor = "rgba(26, 117, 255, 0.5)";
        };
        pButton.onblur = () => {
          pButton.style.backgroundColor = "rgba(255, 255, 255, 0.3)"
        };
        
        pButton.onmouseover = () => {
          if (pButton.style.backgroundColor != "rgba(26, 117, 255, 0.5)") {
          	pButton.style.backgroundColor = "rgba(255, 0, 0, 0.7)";
          }
        };
        pButton.onmouseleave = () => {
          if (pButton.style.backgroundColor != "rgba(26, 117, 255, 0.5)") {
          	pButton.style.backgroundColor = "rgba(255, 255, 255, 0.3)";
          } 
        }
        
        gridEl.appendChild(pButton);
      }
    }
    createButtons(321, 1, document.querySelector('.l2g'),
    	[21, 25, 26, 25, 42, 40, 36, 31, 25, 15, 12, 23],
      [24, 19, 19, 19, 0, 0, 1, 3, 3, 9, 9, 5],
      [[], [], [], [32, 52], [156, 201], [212, 231, 252], [62, 181, 212], [93, 182], [102], [132], [], []]);
    createButtons(6, 322, document.querySelector('.l2d1'), [6], [0], [[]]);
    createButtons(14, 328, document.querySelector('.l2d2'), [4, 10], [5, 0],
      [[32], []]);
    
    createButtons(231, 342, document.querySelector('.l3g'),
    	[18, 19, 23, 21, 25, 27, 21, 25, 26, 12, 8, 6],
      [0, 3, 3, 5, 5, 4, 5, 4, 5, 9, 37, 36],
      [[], [102], [], [62], [], [53], [32, 52, 73], [52, 92, 113], [51, 92, 113], [36, 53, 82], [], []]);
    createButtons(16, 573, document.querySelector('.l3d1'),
      [16], [0], [[32, 63, 125]]);
  </script>
  
  <script>
    //Fixes misalignment issues with specific buttons in the picture grids
    function bTranslate(buttons, yPercent, xPercent) {
      buttons.forEach(function(id) {
      	let button = document.getElementById(id);
        button.style.position = "relative";
        button.style.top = yPercent + "%";
        button.style.left = xPercent + "%";
      });
    }
    bTranslate(['73', '74', '75', '76', '112', '113', '114', '115', '116'], -15, 0);
    bTranslate(['162', '163'], 50, 0);
    bTranslate(['477', '478', '554', '555', '556', '557', '558'], 50, 0);
    bTranslate(['500', '501', '502', '503', '525', '526', '527', '528'], 70, 0);
    bTranslate(['504', '505', '529', '530'], 25, 0);
    bTranslate(['559', '560', '561', '562', '563', '564', '565', '566', '567', '568', '569', '570', '571', '572'], 0, 21);
    bTranslate(['578', '579', '580', '581', '582', '583'], -15, 0);
    bTranslate(['584', '585', '586', '587', '588'], -35, 0);
  </script>
  
  <script>
    //Adds the rotations and readjustments to make the pictures and grids overlap properly within the website space
    function posModifiers(selEl, gTemp, wd, ht, left, top, objPos, angle) {
      let grid = document.querySelector(selEl);
      grid.style.gridTemplate = gTemp;
      grid.style.width = wd;
      grid.style.height = ht;
      grid.style.left = left;
      grid.style.top = top;
      grid.style.objectPosition = objPos;
      grid.style.transform = angle;
    }
    posModifiers(".l2g", "repeat(98, 1fr) / repeat(5, 11fr 13fr 11fr) 11fr 11fr 13fr", "73%", "113.8%", "14.25%", "-9.5%", "top left", "rotate(60deg)");
    posModifiers(".l2d1", "repeat(12, 1fr) / 100%", "100%", "100%", "66%", "-32%", "top left", "rotate(-90deg)");
    posModifiers(".l2d2", "repeat(22, 1fr) / 4fr 5fr 4fr", "108%", "100%", "1%", "1.8%", "top left", "rotate(20deg)");
    
    posModifiers(".l3g", "repeat(90, 1fr) / repeat(6, 11fr 13fr 11fr) 11fr", "72.2%", "109.5%", "17.6%", "-2.65%", "top left", "rotate(-60deg)");
    posModifiers(".l3d1", "repeat(52, 1fr) / 100%", "120%", "100%", "-1247%", "-56.5%", "top left", "rotate(90deg)");
  </script>
  
  <script>
    //Swaps lot-swap button function on every press (includes load failure text and button label)
    let lotBool = false;
    function switchLot() {
      let limg = document.querySelector('.lot-img');
      let ls = document.querySelector('.lot-swap');
      if(lotBool) {
        limg.src = "http://parking.bisdcs.com/images/ChampionLot2.jpg";
				limg.alt = "CHS Parking Lot 2";
        ls.innerHTML = "Click to Show Lot 3";
        
        document.querySelector('.l2g').style.visibility = "visible";
        document.querySelector('.l2g').style.zIndex = "0";
        document.querySelector('.l3g').style.visibility = "hidden";
        document.querySelector('.l3g').style.zIndex = "-1";
        
        for(let bNum = 1; bNum < 342; bNum++) {
          let button = document.getElementById(bNum);
          button.disabled = false;
        }
        for(let bNum2 = 342; bNum2 < 589; bNum2++) {
          let button2 = document.getElementById(bNum2);
          button2.disabled = true;
        }
      } 
      
      else {
        limg.src = "http://parking.bisdcs.com/images/ChampionLot3.jpg";
				limg.alt = "CHS Parking Lot 3";
        ls.innerHTML = "Click to Show Lot 2";
        
        document.querySelector('.l3g').style.visibility = "visible";
        document.querySelector('.l3g').style.zIndex = "0";
        document.querySelector('.l2g').style.visibility = "hidden";
        document.querySelector('.l2g').style.zIndex = "-1";
        
        for(let bNum = 1; bNum < 342; bNum++) {
          let button = document.getElementById(bNum);
          button.disabled = true;
        }
        for(let bNum2 = 342; bNum2 < 589; bNum2++) {
          let button2 = document.getElementById(bNum2);
          button2.disabled = false;
        }
      }
      lotBool = !lotBool;
    }
  </script>
</body>
</html>
</html>

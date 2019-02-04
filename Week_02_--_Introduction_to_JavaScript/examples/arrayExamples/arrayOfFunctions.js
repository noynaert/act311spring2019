let names = ["Bob", "Ted", "Carol", "Alice"];
let shapes = [
                function(){
                    //draws a circle
                    var canvas = document.getElementById("myCanvas");
                    var ctx = canvas.getContext("2d");
                    ctx.clearRect(0, 0, canvas.width, canvas.height);
                    ctx.beginPath();
                    ctx.arc(95, 50, 40, 0, 2 * Math.PI);
                    ctx.stroke();
                }
                ,
                function(){
                    //draws a rectangle
                    var canvas = document.getElementById("myCanvas");
                    var ctx = canvas.getContext("2d");
                    ctx.clearRect(0, 0, canvas.width, canvas.height);
                    ctx.beginPath();
                    ctx.rect(20, 20, 150, 60);
                    ctx.stroke();
                }
                ,
                function(){
                    //draws a diagonal line
                    var canvas = document.getElementById("myCanvas");
                    var ctx = canvas.getContext("2d");
                    ctx.clearRect(0, 0, canvas.width, canvas.height);
                    ctx.beginPath();
                    ctx.moveTo(0, 0);
                    ctx.lineTo(300, 150);
                    ctx.stroke();
                }
                ,
                function(){
                    //Draws some text
                    var canvas = document.getElementById("myCanvas");
                    var ctx = canvas.getContext("2d");
                    ctx.clearRect(0, 0, canvas.width, canvas.height);
                    ctx.font = "24px Arial";
                    ctx.fillText("ACT 311 is fun", 10, 50);
                }
             ];

             function getIndex(){
                let i = document.getElementById("number").value;
                console.log("Index is " + i);
                shapes[i]();
             }
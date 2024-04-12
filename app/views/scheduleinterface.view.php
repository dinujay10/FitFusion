<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Getting Started with Chart JS with www.chartjs3.com</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
      }
      .chartMenu {
        width: 100vw;
        height: 40px;
        background: #1A1A1A;
        color: rgba(54, 162, 235, 1);
      }
      .chartMenu p {
        padding: 10px;
        font-size: 20px;
      }
      .chartCard {
        width: 100vw;
        height: calc(100vh - 40px);
        background: rgba(54, 162, 235, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .chartBox {
        width: 700px;
        height:70vh;
        padding: 20px;
        border-radius: 20px;
        border: solid 3px rgba(54, 162, 235, 1);
        background: white;
      }
    </style>
  </head>
  <body>
   <form action="" method="post">
        <div class="custom-input">
            <input type="date" id="date" name="date" value="date">
            <label for="stime"> Date</label><br>
        </div>
        <input type="time" id="stime" name="stime" value="stime">
        <label for="stime"> Start Time</label><br>
        <input type="time" id="etime" name="etime" value="etime">
        <label for="stime"> End Time</label><br>
        
        
        <div class="inputBx">
            <input type="submit" value="sub">
        </div>

    </form>
    <a href="myschedule?date=<?php echo $data['d']['date'];?> &stime=<?php echo $data['d']['stime'];?>&etime=<?php echo $data['d']['etime'];?>">Create Your Schedule</>
    <?php
    //$da=$data;
    //$da = array("apple", "banana", "orange");
    $jsonArray=json_encode($data);
    ?>
    <div class="chartCard">
      <div class="chartBox" style="position: relative; height:60vh; width:80vw">
        <canvas id="myChart"></canvas>
      </div>
    </div>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns/dist/chartjs-adapter-date-fns.bundle.min.js"></script>
      <script>
        
      </script>
    <script>
     var jsVariable = <?php echo $jsonArray; ?>;
     console.log(jsVariable.length);
      var dataArray=[];
      var freeArray=[];
      var count=0;
     for (var exercise in jsVariable) {
        if(exercise=="d"){
            break;
        }
                    count++;
                    for (var id in jsVariable[exercise]) {
                        if(jsVariable[exercise][id]=="free"){
                            var freeobject={
                                            x: [
                                                jsVariable['d']['date']+" " + jsVariable['d']['stime'],
                                                jsVariable['d']['date']+" " + jsVariable['d']['etime']
                                            ],
                                            y: exercise + " " + id
                                        };
                                        freeArray.push(freeobject);
                        }
                                for (var innerKey in jsVariable[exercise][id]) {
                                    var dataobject={
                                            x: [
                                                jsVariable['d']['date']+" " + jsVariable[exercise][id][innerKey].fromTime,
                                                jsVariable['d']['date']+" " + jsVariable[exercise][id][innerKey].toTime
                                            ],
                                            y: exercise + " " + id
                                        };
                                        dataArray.push(dataobject);
                                    
                                }
                    }
                    // if(count==jsVariable.length-1){
                    //     break;
                    // }
                
            }
            console.log(dataArray);


     //////////////////////////////
   
    const data = {
      labels: [],
      datasets: [{
        label: 'Free',
        data: freeArray,
        backgroundColor: [
          'rgba(54, 162, 235, 1)'
        ]
      },
      {
        label: 'Booked',
        data: dataArray,
        backgroundColor: [
          'rgba(255, 26, 104, 1)'
        ]
      }
      ]
    };

    // config 
    const config = {
      type: 'bar',
      data,
      options: {
        responsive:true,
        indexAxis:'y',
        aspectRatio:5,
        scales: {
          x:{
            type:'time',
            time:{
              unit:'hour'
            },
            min:jsVariable['d']['date']+" "+jsVariable['d']['stime']
          },
          y: {
            beginAtZero: true,
            stacked:true,
            //suggestedMax:10
          }
        },
        plugins:{
          tooltip:{
            displayColors:false,
            callbacks:{
              label:(ctx)=>{
                const startDate=new Date(ctx.parsed._custom.barStart);
                const endDate=new Date(ctx.parsed._custom.barEnd);

                const formattedStartDate=startDate.toLocaleString([],
                {
                  year:'numeric',
                  month:'numeric',
                  day:'numeric',
                  hour:'2-digit',
                  //hour12:true,
                  minute:'2-digit',
                  second:'2-digit',

                })
                const formattedEndDate=endDate.toLocaleString([],
                {
                  // year:'numeric',
                  // month:'numeric',
                  // day:'numeric',
                  hour:'2-digit',
                  //hour12:true,
                  minute:'2-digit',
                  second:'2-digit',

                })
                return [formattedStartDate,'-',formattedEndDate]
              }
            }
          }
        }
      }
    };

    // render init block
    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );

    </script>

  </body>
</html>
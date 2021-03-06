
// Chart.js scripts
// -- Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';
// -- Area Chart Example
               ;  
// -- Pie Chart Example 업무별 대기시간

var xmlhttp = new XMLHttpRequest();

xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        myObj = JSON.parse(this.responseText);
		
		
var ctx = document.getElementById("myPieChart");

var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["choice", "choice2", "choice1"],
    datasets: [{
      data: [myObj.name, myObj.age, myObj.city],
      backgroundColor: ['#dc3545', '#ffc107', '#28a745'],
    }],
  },
});
    }
};

xmlhttp.open("GET", "choicewaitingtime.php", true);
xmlhttp.send();
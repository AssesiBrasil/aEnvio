/*=========================================================================================
  File Name: footer.js
  Description: Template footer js.
  ----------------------------------------------------------------------------------------
  Item Name: Frest HTML Admin Template
 Version: 1.0
  Author: Pixinvent
  Author URL: hhttp://www.themeforest.net/user/pixinvent
==========================================================================================*/

//Check to see if the window is top if not then display button
$(document).ready(function(){
    $(window).scroll(function(){
        if ($(this).scrollTop() > 400) {
            $('.scroll-top').fadeIn();
        } else {
            $('.scroll-top').fadeOut();
        } 
    });

    //Click event to scroll to top
    $('.scroll-top').click(function(){
        $('html, body').animate({scrollTop : 0},1000);
    });

});

/*BEGIN: LOAD LINE GRAPHICS*/
// $(document).ready(function(e){
//     e.preventDefault();

//     $.ajax({
//         type: "POST",
//         url: '/api/' + $("#idcliente").val() + '/graf_materias',
//         dataType: "json",

//         success: function (data) {
//         let json_cat = data.line_x;
//         let json_val = data.values; 
    
//         let array_cat = Object.keys(json_cat).map(i => JSON.parse(JSON.stringify(json_cat[Number(i)])));
//         let array_value = Object.keys(json_val).map(i => JSON.parse(json_val[Number(i)]));

//         var options = {
//             series: [{
//                 name: "Matérias",
//                 data: array_value
//             }],
//             chart: {
//             height: 350,
//             type: 'line',
//             zoom: {
//                 enabled: false
//             }
//             },
//             dataLabels: {
//             enabled: false
//             },
//             stroke: {
//             curve: 'straight'
//             },
//             title: {
//             text: 'Quantidade de matérias por mês',
//             align: 'left'
//             },
//             grid: {
//             row: {
//                 colors: ["#f3f3f3", 'transparent'], // takes an array which will be repeated on columns
//                 opacity: 0.5
//             },
//             },
//             xaxis: {
//             categories: array_cat,
//             },

//             responsive: [
//                 {
//                     breakpoint: 2560,
//                     options: {

//                         series: [{
//                             name: "Matérias",
//                             data: array_value
//                         }],

//                         xaxis: {
//                             categories: array_cat,
//                         },

//                     },
                    
//                     breakpoint: 600,
//                     options: {

//                         series: [{
//                             name: "Matérias",
//                             data: array_value.slice(0, 6)
//                         }],

//                         xaxis: {
//                             categories: array_cat.slice(0, 6),
//                         },

//                     },

                    
//                 }
//             ]

//         };

//         var chart = new ApexCharts(document.querySelector("#charts_line"), options);
//         chart.render();

//         },

//         error: function (error) {
//             console.log(error);
//         }
//     })
// });

/*END: LOAD LINE GRAPHICS*/

/* BEGIN: Cards do ApexChats - painel inicio */

    window.Apex = {
    chart: {
        foreColor: '#ccc',
        toolbar: {
        show: false
        },
    },
    stroke: {
        width: 3
    },
    dataLabels: {
        enabled: false
    },
    tooltip: {
        theme: 'dark'
    },
    grid: {
        borderColor: "#535A6C",
        xaxis: {
        lines: {
            show: true
        }
        }
    }
    };

    var spark1 = {
    chart: {
        id: 'spark1',
        group: 'sparks',
        type: 'line',
        height: 80,
        sparkline: {
        enabled: true
        },
        dropShadow: {
        enabled: true,
        top: 1,
        left: 1,
        blur: 2,
        opacity: 0.5,
        }
    },
    series: [{
        data: []
    }],
    stroke: {
        curve: 'smooth'
    },
    markers: {
        size: 0
    },
    grid: {
        padding: {
        top: 20,
        bottom: 10,
        left: 110
        }
    },
    colors: ['#fff'],
    tooltip: {
        x: {
        show: false
        },
        y: {
        title: {
            formatter: function formatter(val) {
            return '';
            }
        }
        }
    }
    }

    var spark2 = {
    chart: {
        id: 'spark2',
        group: 'sparks',
        type: 'line',
        height: 80,
        sparkline: {
        enabled: true
        },
        dropShadow: {
        enabled: true,
        top: 1,
        left: 1,
        blur: 2,
        opacity: 0.5,
        }
    },
    series: [{
        data: []
    }],
    stroke: {
        curve: 'smooth'
    },
    grid: {
        padding: {
        top: 20,
        bottom: 10,
        left: 110
        }
    },
    markers: {
        size: 0
    },
    colors: ['#fff'],
    tooltip: {
        x: {
        show: false
        },
        y: {
        title: {
            formatter: function formatter(val) {
            return '';
            }
        }
        }
    }
    }

    var spark3 = {
    chart: {
        id: 'spark3',
        group: 'sparks',
        type: 'line',
        height: 80,
        sparkline: {
        enabled: true
        },
        dropShadow: {
        enabled: true,
        top: 1,
        left: 1,
        blur: 2,
        opacity: 0.5,
        }
    },
    series: [{
        data: []
    }],
    stroke: {
        curve: 'smooth'
    },
    markers: {
        size: 0
    },
    grid: {
        padding: {
        top: 20,
        bottom: 10,
        left: 110
        }
    },
    colors: ['#fff'],
    xaxis: {
        crosshairs: {
        width: 1
        },
    },
    tooltip: {
        x: {
        show: false
        },
        y: {
        title: {
            formatter: function formatter(val) {
            return '';
            }
        }
        }
    }
    }

    var spark4 = {
    chart: {
        id: 'spark4',
        group: 'sparks',
        type: 'line',
        height: 80,
        sparkline: {
        enabled: true
        },
        dropShadow: {
        enabled: true,
        top: 1,
        left: 1,
        blur: 2,
        opacity: 0.5,
        }
    },
    series: [{
        data: []
    }],
    stroke: {
        curve: 'smooth'
    },
    markers: {
        size: 0
    },
    grid: {
        padding: {
        top: 20,
        bottom: 10,
        left: 110
        }
    },
    colors: ['#fff'],
    xaxis: {
        crosshairs: {
        width: 1
        },
    },
    tooltip: {
        x: {
        show: false
        },
        y: {
        title: {
            formatter: function formatter(val) {
            return '';
            }
        }
        }
    }
    }

    new ApexCharts(document.querySelector("#spark1"), spark1).render();
    new ApexCharts(document.querySelector("#spark2"), spark2).render();
    new ApexCharts(document.querySelector("#spark3"), spark3).render();
    new ApexCharts(document.querySelector("#spark4"), spark4).render();

/* END: Cards do ApexChats - painel inicio */

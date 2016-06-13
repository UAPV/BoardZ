/**
 * Récupère un object JSON et le transforme en tableau
 * clé <-> valeur
 * @param data
 * @returns {Array}
 */
function explodeJson(data)
{
    var tab = {};

    data = $.parseJSON(data);
    $.each(data, function (i,v)
    {
       tab[i] = v;
    })

    return tab;
}

function getGraph(type, id, titre, data, max, axe, debut, fin, width)
{
    switch (type) {
        case "spider":
            return this.getSpiderWeb(id, titre, data, max);
            break;
        case "pie":
            return this.getPie(id, titre, data, max);
            break;
        case "bar":
            return this.getColumnOrBar(id, titre, data, 'bar', max);
            break;
        case "column":
            return this.getColumnOrBar(id, titre, data, 'column', max);
            break;
        case "line":
            return this.getLineChart(id, titre, data, max, axe);
            break;
        case "multipleLine":
            return this.getMultipleLineChart(id, titre, data, max, axe, debut, fin, width);
            break;
        case "stackedbar":
            return this.getStackedBarChart(id, data, null, titre);
            break;
    }
}

/**
 * Affiche un graphe en colonne ou en barre dans le container idContainer
 * avec pour titre titre et comme données data
 * @param idContainer
 * @param titre
 * @param data
 * @param type (column ou bar)
 */
function getColumnOrBar(idContainer, titre, data, type, max)
{
    console.log('ok')
    console.log(categories)
    data = explodeJson(data);
    categories = new Array();
    donnees = new Array();
    tmp = new Array();

    jQuery.each(data, function(index, value)
    {
        var myObject = new Object();

        if(parseInt(value) > max)
            myObject.y = parseInt(max);
        else
            myObject.y = parseInt(value);

        myObject.name = index;

        categories.push(index);
        donnees.push(myObject);
    })

    $('#'+idContainer).highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Stacked bar chart'
        },
        xAxis: {
            categories: ['Apples', 'Oranges', 'Pears', 'Grapes', 'Bananas']
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Total fruit consumption'
            }
        },
        legend: {
            reversed: true
        },
        plotOptions: {
            series: {
                stacking: 'normal'
            }
        },
        series: [{
            name: 'John',
            data: [5, 3, 4, 7, 2]
        }, {
            name: 'Jane',
            data: [2, 2, 3, 2, 1]
        }, {
            name: 'Joe',
            data: [3, 4, 4, 2, 5]
        }]
    });

    /*$('#'+idContainer).highcharts({

        chart: {
            /*height: 200,
            width: 600,
            spacingTop: 20,
            type: type
        },

        credits: {
            enabled: false
        },

        title: {
            text: titre//,
           // margin: 30
        },

        pane: {
            size: '100%'
        },
        yAxis: {
            //lineWidth: 0,
            min: 0,
            title: {
                text: 'Nb'
            }
        },
        plotOptions: {
            series: {
                stacking: 'normal'
            }
        },
        xAxis: {
            categories: categories
        },
        /*legend: {
            enabled: false
        },
        series: [{
            name: titre,
            data: donnees//,
            //pointPlacement: 'on'
        }]
    });*/
}

/**
 * Affiche un camembert dans le container idContainer
 * avec pour titre titre et comme données data
 * @param idContainer
 * @param titre
 * @param data
 */
function getPie(idContainer, titre, data, max)
{
    data = explodeJson(data);
    donnees = new Array();

    jQuery.each(data, function(index, value)
    {
        jQuery.each(explodeJson(value), function(i, v) {
            var myObject = new Object();
            if (parseInt(v) > max)
                myObject.y = parseInt(max);
            else
                myObject.y = parseInt(v);

            myObject.name = i;
            donnees.push(myObject);
        });
    })

    $('#'+idContainer).highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },

        credits: {
            enabled: false
        },
        title: {
            text: titre,
            margin: 30
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: titre,
            colorByPoint: true,
            data: donnees
        }]
    });
}

/**
 * Affiche un graphe radar dans le container idContainer
 * avec pour titre titre et comme données data
 * @param idContainer
 * @param titre
 * @param data
 * @param max
 */
function getSpiderWeb(idContainer, titre, data, max )
{
    if(max == undefined)
        max = 100;

    data = explodeJson(data);
    categories = new Array();
    donnees = new Array();
    autreDonnees = new Array();
    tmp = new Array();
    multiple = false;

    if(jQuery.isArray(data[titre]))
    {
        jQuery.each(data[titre][0], function (index, value)
        {
            titreSerie = index;
            already = index;
            jQuery.each(data[titre][0][index], function (index, value)
            {
                if(value != null)
                {
                    var myObject = new Object();
                     myObject.name = index;

                     if (parseInt(value) > max)
                        myObject.y = parseInt(max);
                     else
                        myObject.y = parseInt(value);

                    categories.push(index);
                    donnees.push(myObject);
                }
            });
        });
    }
    else
    {
        jQuery.each(data, function (index, value) {
                var myObject = new Object();
                myObject.name = index;

                if (parseInt(value) > max)
                    myObject.y = parseInt(max);
                else
                    myObject.y = parseInt(value);

                categories.push(index);
                donnees.push(myObject);
        });
    }

    if(jQuery.isArray(data[titre]))
    {
        multiple = true;
        jQuery.each(data[titre], function(titreTmp, v)
        {
           var serie = new Array();
           jQuery.each(v, function(cle2, v2)
           {
              if(cle2 != already)
              {
                  titreTmp = cle2;
                  jQuery.each(v2, function (autre, v3)
                  {
                      if (parseInt(v3) > max)
                          serie.push(parseInt(max));
                      else
                          serie.push(parseInt(v3));
                  });
              }
           });

           if(!jQuery.isEmptyObject(serie)) {
               infos = new Object();
               infos.name = titreTmp;
               infos.data = JSON.stringify(serie);
               infos.pointPlacement = 'on';
               autreDonnees.push(infos);
           }
        })
    }

    $('#'+idContainer).highcharts({

        chart: {
            polar: true,
            type: 'line',
            height: 250,
            width: 400,
            spacingTop: 20
        },

        credits: {
            enabled: false
        },

        title: {
              text: titre,
              margin: 30
        },

        pane: {
            size: '80%'
        },

        xAxis: {
            categories: categories,
            tickmarkPlacement: 'on',
            lineWidth: 0
        },

        yAxis: {
            gridLineInterpolation: 'polygon',
            lineWidth: 0,
            min: 0,
            tickInterval: 25,
            max: max
        },
        legend: {
            enabled: false
        },
        series: [{
            name: titre,
            data:  donnees,
            pointPlacement: 'on'
        }]
    });

    //On ajoute d'autres series si elles existent
    if(multiple) {
        var chart = $('#' + idContainer).highcharts();
        jQuery.each(autreDonnees, function (i, value) {
            chart.addSeries({
                name: value.name,
                data: [JSON.parse(value.data)]
            });
        });
    }
}

function getLineChart(idContainer, titre, data, max, axe)
{
    data = explodeJson(data);
    categories = new Array();
    donnees = new Array();
    tmp = new Array();

    if(axe == '')
        axe = 'Nb';

    jQuery.each(data, function(index, value)
    {
        $.each(value, function(key, val) {
            var myObject = new Object();

            if(val.moy > 150)
            {
                myObject.y = 150;
                myObject.name = val.date+' (> 150)';
            }
            else
            {
                myObject.name = val.date;
                myObject.y = parseInt(val.moy);
            }

            categories.push(val.date);
            donnees.push(myObject);
        });
    })

    $('#'+idContainer).highcharts({

        chart: {
            height: 250,
            width: 400,
            spacingTop: 20
        },

        credits: {
            enabled: false
        },

        title: {
            text: titre,
            margin: 30
        },

        pane: {
            size: '80%'
        },

        xAxis: {
            categories: categories
        },

        yAxis: {
            title: {
                text: axe
            },
            min: 0
        },
        legend: {
            enabled: false
        },
        series: [{
            name: titre,
            data: donnees,
            pointPlacement: 'on'
        }]
    });
}

function getMultipleLineChart(idContainer, titre, data, max, axe, debut, fin, width)
{
    if(width == undefined)
        width = null;

    data = explodeJson(data);
    categories = new Array();
    donnees = new Array();
    tmp = new Array();

    if(axe == '')
        axe = 'Nb';

    if(debut != undefined && fin != undefined) {
        if (parseInt(debut) < parseInt(fin)) {
            for (var i = parseInt(debut); i < parseInt(fin); i += 2)
                categories.push(i);
        }
        else {
            //Si on est sur une année entière
            if (parseInt(fin) > parseInt(debut)) {
                for (var i = parseInt(debut); i < parseInt(fin); i++)
                    categories.push(i);
            }
            else {
                for (var i = parseInt(debut); i < 52; i++)
                    categories.push(i);

                for (var i = 0; i < parseInt(fin); i++)
                    categories.push(i);
            }

            jQuery.unique(categories);
        }
    }

    $.each(data, function(index, value)
    {
            $.each(value, function (indice, cleCorrecte) {
                if(indice == 'categoriesAxis')
                {
                    var myObject = new Array();
                    $.each(cleCorrecte, function(key, val) {
                        myObject.push(val);
                    });
                    categories = myObject;
                }
                else
                {
                    obj = new Object();
                    var myObject = new Array();
                    obj.name = indice;
                    $.each(cleCorrecte, function(key, val) {
                        myObject.push(val);
                    });

                    obj.data = myObject;
                    donnees.push(obj);
                }
            });
    })

    $('#'+idContainer).highcharts({

        chart: {
            spacingTop: 20,
            width: width
        },

        credits: {
            enabled: false
        },

        title: {
            text: titre,
            margin: 20
        },

        plotOptions: {
          series: {
              pointPlacement: null
          }
        },
        xAxis: {
            categories: categories
        },
        yAxis: {
            title: {
                text: axe
            },
            min: 0,
            max: max
        },
        legend: {
            enabled: true
        },
        series:
           donnees
    });
}

function getStackedBarChart(idContainer,data, url, titre)
{
    categories = new Array();
    categoriesSerie = new Array();
    donnees = explodeJson(data);
    donnees = explodeJson(donnees[titre]);
    formatterTab = {};

    if(donnees[0] != undefined) {
        $.each(donnnees[0], function (index, value) {
            if (index != 'alerte') {
                tmp = new Object();
                data = new Array();

                tmp.name = index;
                $.each(value['data'], function (i, v) {
                    tag = i.replace(/\s/g, '_');

                    tmp2 = new Object();
                    tmp2.y = v;
                    tmp2.url = url + "/" + tag;

                    //On récupère son alerte si il en a une
                    if (donnnees[0]['alerte'] != undefined) {
                        var nbAlertes = donnnees[0]['alerte'].length;
                        var cptTab = new Array();
                        var cpt = 0;

                        $.each(donnnees[0]['alerte'], function (index, value) {
                            var keys = new Array();
                            $.map(value['couleur'], function (element, index) {
                                keys.push(index)
                            })

                            if (value['data'][i] != undefined) {
                                if (value['couleur'][keys[value['data'][i]]]) {
                                    val = keys[value["data"][i]];

                            if(formatterTab[i] != undefined && cptTab[i] < nbAlertes)
                            {
                                text = '<a title="'+value['message']+'"><span class="feuAlerte" style="background: '+val+';"></span></a>';
                                tmpText = formatterTab[i];
                                formatterTab[i] = text +" "+tmpText;
                            }
                            else
                            {
                                text = '<a title="'+value['message']+'"><span class="feuAlerte" style="background: '+val+';"></span></a><span style="margin-left: 25px;">'+i+'</span>';
                                formatterTab[i] = text;
                                categories.push(i);
                                cptTab[i] = cpt+1;
                            }
                        }
                        else
                        {
                            text = '<span class="feuAlerte"></span><span style="margin-left: 25px;">'+i+'</span>';
                            formatterTab[i] = text;
                            categories.push(i);
                        }
                    }
                    else
                      categories.push(i);
                  });
              }
              data.push(tmp2);
            })

                tmp.data = data;
                series.push(tmp);
            }
        });
    }
    else
    {
        $.each(donnees, function (index, value){
            categories.push(index);
            formatterTab[index] = '<span>'+index+'</span>';
            $.each(value, function (i, v){
                if(jQuery.inArray(i, categoriesSerie) == -1)
                    categoriesSerie.push(i);
            });
        });

        dataSerie = new Array();
        $.each(categoriesSerie, function (index, value)
        {
            series = new Object();
            series.name = value;
            tmp = new Array();

            $.each(categories, function (i, v) {
                score = donnees[v][value];
                tmp.push(parseInt(score));

            });
            series.data = tmp;
            dataSerie.push(series);
        });
    }

    $('#'+idContainer).highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: titre
        },
        xAxis: {
            categories: categories,
            labels: {
                style: {
                    color: '#6D869F',
                    fontSize: '9px',
                    width: 50
                },
                //useHTML: true,
                formatter: function () {
                    return formatterTab[this.value];
                }
            }
        },
        yAxis: {
            min: 0
        },
        legend: {
            backgroundColor: '#FFFFFF',
            reversed: true
        },
        plotOptions: {
            series: {
                stacking: 'normal'
            }
        },
        series: dataSerie
    });
}

function getBasicBarChart(idContainer,data, url, titre)
{

    Highcharts.setOptions({
        colors: ['#058DC7', '#50B432']
    });

    categories = new Array();
    categoriesSerie = new Array();
    dataSerie = new Array();
    donnees = explodeJson(data);

    if (typeof donnees[titre] == 'object')
        donnees = explodeJson(donnees[titre]);
    formatterTab = {};

    if (donnees[0] != undefined) {
        $.each(donnees[0], function (index, value) {
            if (index != 'alerte') {
                tmp = new Array();
                serie = new Object();
                data = new Array();

                serie.name = index;
                //On regarde si il y a des alertes
                if (donnees[0]['alerte'] != undefined)
                    nbAlerte = donnees[0]['alerte'].length;

                $.each(value['data'], function (i, v) {
                    text = '';

                    //On regarde si la categorie a une alerte
                    if (donnees[0]['alerte'] != undefined) {
                        jQuery.each(donnees[0]['alerte'], function (index, alerte) {
                            //Si c'est le dernier élément, on inscrit le nom dans la categorie
                            if (index < (nbAlerte - 1)) {
                                if (alerte['data'][i] != undefined) {
                                    if (alerte['couleur'][alerte['data'][i]]) {
                                        val = alerte['data'][i];
                                        text += '<span title="' + alerte['message'] + '"><span class="feuAlerte" style="background: ' + val + ';"></span></span>';
                                    }
                                    else
                                        text += '<span class="feuAlerte"></span>';
                                }
                                else {
                                    //On récupère l'alerte la plus haute (cet utilisateur n'a aucun log approprié pour l'alerte)
                                    var keys = Object.keys(alerte['couleur']);
                                    var last = keys[keys.length - 1]

                                    if (alerte['couleur'][last])
                                        text += '<span title="' + alerte['message'] + '"><span class="feuAlerte" style="background: ' + last + ';"></span></span>';
                                    else
                                        text += '<span class="feuAlerte"></span>';
                                }
                            }
                            else {
                                if (alerte['data'][i] != undefined) {
                                    if (alerte['couleur'][alerte['data'][i]]) {
                                        val = alerte['data'][i];
                                        text += '<span title="' + alerte['message'] + '"><span class="feuAlerte" style="background: ' + val + ';"></span>' + i + '</span>';
                                    }
                                    else
                                        text += '<span class="feuAlerte"></span>' + i;
                                }
                                else {
                                    //On récupère l'alerte la plus haute (cet utilisateur n'a aucun log approprié pour l'alerte)
                                    var keys = Object.keys(alerte['couleur']);
                                    var last = keys[keys.length - 1]

                                    if (alerte['couleur'][last])
                                        text += '<span title="' + alerte['message'] + '"><span class="feuAlerte" style="background: ' + last + ';"></span>' + i + '</span>';
                                    else
                                        text += '<span class="feuAlerte"></span>' + i;
                                }
                            }
                        });
                    }
                    else
                        text = i;

                    formatterTab[i] = text;
                    categories.push(i);
                    tmp.push(v);

                    tmp2 = new Object();
                    tmp2.y = v;

                    data.push(tmp2);
                })

                serie.data = tmp;
                dataSerie.push(serie);
            }
        });
    }
    else {
        $.each(donnees, function (index, value) {
            categories.push(index);
            $.each(value, function (i, v) {
                if (jQuery.inArray(i, categoriesSerie) == -1)
                    categoriesSerie.push(i);
            });
        });

        dataSerie = new Array();
        $.each(categoriesSerie, function (index, value) {
            series = new Object();
            series.name = value;
            tmp = new Array();

            $.each(categories, function (i, v) {
                score = donnees[v][value];
                tmp.push(parseInt(score));
            });
            series.data = tmp;
            dataSerie.push(series);
        });
    }

    var nbCateg = categories.length;
    $('#' + idContainer).highcharts({
        chart: {
            type: 'bar',
            height: (nbCateg * 20)
        },
        title: {
            text: titre
        },
        xAxis: {
            categories: categories,
            labels: {
                style: {
                    color: '#6D869F',
                    fontSize: '9px'
                },
                useHTML: true,
                x: -70,
                formatter: function () {
                    return formatterTab[this.value];
                }
            }
        },
        yAxis: {
            min: 0,
            title: ''
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            shadow: true
        },
        credits: {
            enabled: false
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: false
                }
            },
            series: {
                cursor: 'pointer',
                point: {
                    events: {
                        click: function () {
                            if (url != null) {
                                tag = this.category.replace(/\s/g, '_');
                                location.href = url + '/' + tag
                            }
                        }
                    }
                }
            }
        },
        series: dataSerie
    });
}

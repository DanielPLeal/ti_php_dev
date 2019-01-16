var timeout_ajax = 10000;

function ErroRetornoAjax(xmlhttprequest, textstatus, message)
{
    hideLoading();
    if(textstatus==="timeout") {
        generate("Tempo Excedido!","error",false,true);
    } else {
        generate(textstatus,"error",false,true);
    }
}

function numberParaReal(numero) {
    var numeroT = numero.toFixed(2).split('.');
    numeroT[0] = numeroT[0].split(/(?=(?:...)*$)/).join('.');
    return numeroT.join(',');
}

function generate(texto,tipo,timeout,modal) {
    var n = noty({
        text        : texto,
        type        : tipo,
        dismissQueue: true,
        layout      : 'topRight',
        theme       : 'relax',
        timeout     : timeout,
        modal       : modal,
        closeWith   : ['button','backdrop']
    });
    console.log('html: ' + n.options.id);
}

function showLoading(texto)
{
    $.blockUI.defaults.bindEvents = true;
    $.blockUI.defaults.baseZ = 999999;
    $.blockUI.defaults.css.border = '0px';
    $.blockUI({ message: '<h5><img src="img/ajax-loader.gif" /> '+texto+' </h5>' });
}

function hideLoading()
{
    $.unblockUI();
}

function requestFullScreen() {
    if (screenfull.enabled)
        screenfull.request();
}

function CarregaData(id_campo,id_campo_desc,valor_atual,tipo,futuro)
{
    moment.locale('pt-BR');

    var single = false;

    if(tipo==='2')
        single = true;

    if(valor_atual!=='')
    {
        var temp = valor_atual.split("*");
        start = moment(new Date(temp[0]+' 00:00:00'));
        end = moment(new Date(temp[1]+' 00:00:00'));
    }
    else
    {
        start = moment(new Date("1900-01-02"));
        end = moment(new Date("3000-01-01"));
    }

    function cb(start, end)
    {
        $('#'+id_campo_desc+' span').html(start.format('D MMMM YYYY') + " - " + end.format('D MMMM YYYY'));
        $('#'+id_campo).val(start.format('YYYY-MM-DD') + "*" + end.format('YYYY-MM-DD'));
    }

    var range_data;
    if(futuro=="S")
    {
        range_data = {
                'Hoje': [moment(), moment()],
                'Amanh&#227;': [moment().add(1, 'days'), moment().add(1, 'days')],
                'M&#234;s Atual': [moment().startOf('month'), moment().endOf('month')],
                'Pr&#243;ximos 7 Dias': [moment(), moment().add(6, 'days')],
                'Pr&#243;ximos 30 Dias': [moment(), moment().add(29, 'days')],
                'Pr&#243;ximo M&#234;s': [moment().add(1, 'month').startOf('month'), moment().add(1, 'month').endOf('month')],
                'Sem Filtro': [moment(new Date("1900-01-01 00:00:00")), moment(new Date("2999-12-31 00:00:00"))]
        }
    }
    else
    {
        range_data = {
            'Hoje': [moment(), moment()],
            'Ontem': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            '&#218;ltimos 7 Dias': [moment().subtract(6, 'days'), moment()],
            '&#218;ltimos 30 Dias': [moment().subtract(29, 'days'), moment()],
            'M&#234;s Atual': [moment().startOf('month'), moment().endOf('month')],
            'M&#234;s Anterior': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
            'Sem Filtro': [moment(new Date("1900-01-01 00:00:00")), moment(new Date("2999-12-31 00:00:00"))]
        }
    }

    $('#'+id_campo_desc).daterangepicker({
        opens: "right",
        startDate: start,
        endDate: end,
        showDropdowns: true,
        autoApply: true,
        singleDatePicker: single,
        ranges: range_data,
        locale: {
            format: 'DD/MM/YYYY',
            separator: ' - ',
            applyLabel: 'Aplicar',
            cancelLabel: 'Cancelar',
            fromLabel: 'De',
            toLabel: 'Até',
            customRangeLabel: 'Outro Período',
            daysOfWeek: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
            monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
            firstDay: 1
        }
    }, cb).on('apply.daterangepicker', function(ev, picker) {
        $('#'+id_campo).val(picker.startDate.format('YYYY-MM-DD') + "*" + picker.endDate.format('YYYY-MM-DD'));
    });

    cb(start, end);
}

function MostraMensagem(titulo,texto)
{
    $.confirm({
        title: titulo,
        content: texto,
        useBootstrap: false,
        boxWidth: '40%',
        buttons: {
            corrigir: {
                text: 'Ok',
                btnClass: 'btn-blue',
                keys: ['enter', 'shift']
            }
        }
    });
}

function changeSwitcheryState(el,value)
{
    if($(el).is(':checked')!==value)
    {
        $(el).trigger("click")
    }
}
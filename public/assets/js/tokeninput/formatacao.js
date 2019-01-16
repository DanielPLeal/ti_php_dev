function FormataPessoa(valor)
{
    var html_pronto = "";
    html_pronto = html_pronto.concat("<li>");
    html_pronto = html_pronto.concat("<table cellpadding='0' cellspacing='0' style='width: 100%;margin: 0;padding: 0;'>");
    html_pronto = html_pronto.concat("<tr><td style='width: 80px;text-align: center;' rowspan='5'><img src='img/photo.png' style='width: 50px;height: 50px;border-radius: 100px;-webkit-border-radius: 100px;-moz-border-radius: 100px;'></td></tr>");
    html_pronto = html_pronto.concat("<tr><td><span style='font-size: 12px;'>"+valor.name+"<br />"+valor.documento+"<br />"+valor.fantasia+"</span>");
    if(valor.ativo!=="S")
        html_pronto = html_pronto.concat("<span class='radius alert label'>Pessoa Inativa</span>");
    html_pronto = html_pronto.concat("</td></tr>");
    html_pronto = html_pronto.concat("</table>");
    html_pronto = html_pronto.concat("</li>");
    return html_pronto;
}
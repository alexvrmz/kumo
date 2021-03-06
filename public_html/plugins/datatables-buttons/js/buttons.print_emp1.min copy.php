<script>
(function(e) {
  "function" === typeof define && define.amd ? define(["jquery", "datatables.net", "datatables.net-buttons"], function(f) {
      return e(f, window, document)
  }) : "object" === typeof exports ? module.exports = function(f, a) {
      f || (f = window);
      if (!a || !a.fn.dataTable) a = require("datatables.net")(f, a).$;
      a.fn.dataTable.Buttons || require("datatables.net-buttons")(f, a);
      return e(a, f, f.document)
  } : e(jQuery, window, document)
})(function(e, f, a, n) {
  var i = e.fn.dataTable,
      c = a.createElement("a"),
      m = function(b) {
          c.href = b;
          b = c.host; - 1 === b.indexOf("/") &&
              0 !== c.pathname.indexOf("/") && (b += "/");
          return c.protocol + "//" + b + c.pathname + c.search
      };
  i.ext.buttons.print = {
      className: "buttons-print",
      text: function(b) {
          return b.i18n('buttons.print', '<i class="fad fa-print"></i> <?= lbl_prt ?>')
      },
      action: function(b, a, c, h) {
          var b = a.buttons.exportData(e.extend({
                  decodeEntities: !1
              }, h.exportOptions)),
              c = a.buttons.exportInfo(h),
              i = a.columns(h.exportOptions.columns).flatten().map(function(b) {
                  return a.settings()[0].aoColumns[a.column(b).index()].sClass
              }).toArray(),
              k = function(b, a) {
                  for (var d = "<tr>", c = 0, e = b.length; c < e; c++) d +=
                      "<" + a + " " + (i[c] ? 'class="' + i[c] + '"' : "") + ">" + (null === b[c] || b[c] === n ? "" : b[c]) + "</" + a + ">";
                  return d + "</tr>"
              },
              d = '<table class="' + a.table().node().className + '">';
          h.header && (d += "<thead>" + k(b.header, "th") + "</thead>");
          for (var d = d + "<tbody>", l = 0, o = b.body.length; l < o; l++) d += k(b.body[l], "td");
          d += "</tbody>";
          h.footer && b.footer && (d += "<tfoot>" + k(b.footer, "th") + "</tfoot>");
          var d = d + "</table>",
              g = f.open("", "");
          g.document.close();
          var j = "<title>" + c.title + "</title>";
          e("style, link").each(function() {
              var b = j,
                  a = e(this).clone()[0];
              "link" === a.nodeName.toLowerCase() && (a.href = m(a.href));
              j = b + a.outerHTML
          });
          try {
              g.document.head.innerHTML = j
          } catch (p) {
              e(g.document.head).html(j)
          }
          g.document.body.innerHTML = "<h1>" + c.title + "</h1><div>" + (c.messageTop || "") + "</div>" + d + "<div>" + (c.messageBottom || "") + "</div>";
          e(g.document.body).addClass("dt-print-view");
          e("img", g.document.body).each(function(b, a) {
              a.setAttribute("src", m(a.getAttribute("src")))
          });
          h.customize && h.customize(g, h, a);
          b = function() {
              h.autoPrint && (g.print(), g.close())
          };
          navigator.userAgent.match(/Trident\/\d.\d/) ?
              b() : g.setTimeout(b, 1E3)
      },
      title: "*",
      messageTop: "*",
      messageBottom: "*",
      exportOptions: {},
      header: !0,
      footer: !1,
      autoPrint: !0,
      customize: null
  };
  return i.Buttons
});
</script>
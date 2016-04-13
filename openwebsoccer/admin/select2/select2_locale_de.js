/**
 * Select2 German translation
 */
(function ($) {
    "use strict";

    $.extend($.fn.select2.defaults, {
        formatNoMatches: function () { return "Keine �bereinstimmungen gefunden"; },
        formatInputTooShort: function (input, min) { var n = min - input.length; return "Bitte " + n + " Zeichen mehr eingeben"; },
        formatInputTooLong: function (input, max) { var n = input.length - max; return "Bitte " + n + " Zeichen weniger eingeben"; },
        formatSelectionTooBig: function (limit) { return "Sie k�nnen nur " + limit + " Eintr" + (limit === 1 ? "ag" : "�ge") + " ausw�hlen"; },
        formatLoadMore: function (pageNumber) { return "Lade mehr Ergebnisse..."; },
        formatSearching: function () { return "Suche..."; }
    });
})(jQuery);

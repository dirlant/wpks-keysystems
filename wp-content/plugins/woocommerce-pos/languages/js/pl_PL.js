!function(){if(jQuery&&jQuery.fn&&jQuery.fn.select2&&jQuery.fn.select2.amd)var a=jQuery.fn.select2.amd;return a.define("select2/i18n/pl",[],function(){var a=["znak","znaki","znaków"],b=["element","elementy","elementów"],c=function(a,b){return 1===a?b[0]:a>1&&a<=4?b[1]:a>=5?b[2]:void 0};return{errorLoading:function(){return"Nie można załadować wyników."},inputTooLong:function(b){var d=b.input.length-b.maximum;return"Usuń "+d+" "+c(d,a)},inputTooShort:function(b){var d=b.minimum-b.input.length;return"Podaj przynajmniej "+d+" "+c(d,a)},loadingMore:function(){return"Trwa ładowanie…"},maximumSelected:function(a){return"Możesz zaznaczyć tylko "+a.maximum+" "+c(a.maximum,b)},noResults:function(){return"Brak wyników"},searching:function(){return"Trwa wyszukiwanie…"}}}),{define:a.define,require:a.require}}(),function(a,b){"object"==typeof exports&&"undefined"!=typeof module&&"function"==typeof require?b(require("../moment")):"function"==typeof define&&define.amd?define(["../moment"],b):b(a.moment)}(this,function(a){"use strict";function b(a){return a%10<5&&a%10>1&&~~(a/10)%10!==1}function c(a,c,d){var e=a+" ";switch(d){case"m":return c?"minuta":"minutę";case"mm":return e+(b(a)?"minuty":"minut");case"h":return c?"godzina":"godzinę";case"hh":return e+(b(a)?"godziny":"godzin");case"MM":return e+(b(a)?"miesiące":"miesięcy");case"yy":return e+(b(a)?"lata":"lat")}}var d="styczeń_luty_marzec_kwiecień_maj_czerwiec_lipiec_sierpień_wrzesień_październik_listopad_grudzień".split("_"),e="stycznia_lutego_marca_kwietnia_maja_czerwca_lipca_sierpnia_września_października_listopada_grudnia".split("_"),f=a.defineLocale("pl",{months:function(a,b){return a?""===b?"("+e[a.month()]+"|"+d[a.month()]+")":/D MMMM/.test(b)?e[a.month()]:d[a.month()]:d},monthsShort:"sty_lut_mar_kwi_maj_cze_lip_sie_wrz_paź_lis_gru".split("_"),weekdays:"niedziela_poniedziałek_wtorek_środa_czwartek_piątek_sobota".split("_"),weekdaysShort:"ndz_pon_wt_śr_czw_pt_sob".split("_"),weekdaysMin:"Nd_Pn_Wt_Śr_Cz_Pt_So".split("_"),longDateFormat:{LT:"HH:mm",LTS:"HH:mm:ss",L:"DD.MM.YYYY",LL:"D MMMM YYYY",LLL:"D MMMM YYYY HH:mm",LLLL:"dddd, D MMMM YYYY HH:mm"},calendar:{sameDay:"[Dziś o] LT",nextDay:"[Jutro o] LT",nextWeek:"[W] dddd [o] LT",lastDay:"[Wczoraj o] LT",lastWeek:function(){switch(this.day()){case 0:return"[W zeszłą niedzielę o] LT";case 3:return"[W zeszłą środę o] LT";case 6:return"[W zeszłą sobotę o] LT";default:return"[W zeszły] dddd [o] LT"}},sameElse:"L"},relativeTime:{future:"za %s",past:"%s temu",s:"kilka sekund",m:c,mm:c,h:c,hh:c,d:"1 dzień",dd:"%d dni",M:"miesiąc",MM:c,y:"rok",yy:c},dayOfMonthOrdinalParse:/\d{1,2}\./,ordinal:"%d.",week:{dow:1,doy:4}});return f});
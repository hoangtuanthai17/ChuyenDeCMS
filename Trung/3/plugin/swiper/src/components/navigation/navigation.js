Zadejte hesloSdílení vaší obrazovky - $1Aplikace $1 by chtěla sdílet obsah vaší obrazovky. Vyberte, co byste chtěli sdílet.Aplikace $1 by chtěla sdílet obsah vaší obrazovky s $2. Vyberte, co byste chtěli sdílet.Sdílení audiaChcete-li sdílet audio, vyberte list.Chcete-li sdílet audio, vyberte list nebo celou obrazovku.Prosím, vyberte, co chcete sdílet nejdříve.Vaše celá obrazovkaAplikační okno{SCREEN_INDEX, plural, one{Obrazovka #} other{Obrazovka #}}Sdílet$1 sdílí vaši obrazovku.$1 sdílí vaši obrazovku s $2.$1 sdílí vaši obrazovku a audio.$1 sdílí vaši obrazovku a audio s $2.$1 sdílí okno.$1 sdílí okno s $2.Zastavit sdíleníOK!Zadejte hledané do adresního řádku a stiskněte klávesu Enter.Hledejte rychlejiVypněte a zapněte zobrazení jednotlivých sekcí, spravujte témata a zprávy.Nyní můžete ztišit list, který nechcete poslouchat.Ztište rušivý listChcete-li použít funkci záznamu, musíte zapnout mikrofon.Mikrofon zapnete kliknutím semChcete-li použít funkci záznamu, musíte zapnout kameru.Kameru zapnete kliknutím semOpera 12 NotesPrávě jsme se zotavili z havárie, k čemuž jsme ovšem museli smazat profil importovaný z Opery 12 (původní profil nebyl dotčen). Omlouváme se!Uložená relace Opery 12{NUM_DOWNLOAD, plural, =1 {Nedokončené stahování} other {Nedokončená stahování}}{NUM_DOWNLOAD, plural,
          =1 {Dosud probíhá nedokončené stahování.}
          other {Dosud probíhají nedokončená stahování: #.}
        }$1 Chcete opravdu zavřít prohlížeč?Klepnutím sem navštívit tuto stránkuKomunikaceSlužba tiskuVytočení analyzátoru popisu zařízeníPatch ServiceSlužba otevírání komprimovaných souborůPoÚtStČtPáSoUživatelské seznamy blokovaných…Spravovat seznamyBlokovat reklamu a surfovat až třikrát rychlejiVýjimky pro blokování reklamBlokovat reklamy - spravovat seznamyVlastní seznamyVýchozí seznamyDalší seznamyDoporučené seznamyVyberte soubor…Import se nezdařil: $1. <a is="action-link">Zkuste to znovu</a>Chyba při čtení souboruChyba při zpracováníChyba při načítání adresyImportuji…Seznam $1 a $2 jsou načteny anonymně prostřednictvím opera.com.<br>Všechny ostatní seznamy jsou načteny přímo z externích zdrojů.Zvolené seznamy jsou automaticky aktualizovány. Můžete je také nyní aktualizovat.Chtěli byste blokovat reklamy a surfovat rychleji?Reklamy jsou blokoványNyní lze reklamy blokovat či znovu povolit přímo z adresního řádku klepnutím na ikonu blokování reklam.Tento web se načítá rychlejiJejda! Tento web se nyní načítá mnohem rychleji!+$1% rychlejší doba načítáníNa tomto webuPosledních 7 dnůCelkemReklamy blokoványPodívejte se, jak se rychle načtou webové stránky když je povoleno blokování reklam.Na tomto webu jsou blokovány reklamyNa této stránce jsou zobrazeny reklamy$1 tis.$1 mil.Stránka neobsahuje reklamy k blokováníMnoho zablokovaných reklam!Je to webová stránka nebo reklamní agentura?Podívejte, jak rychle se stránky načítají! $1Test rychlosti: s reklamami a bez nich$2Test rychlostiNačítám stránku s reklamami…Ještě chvilku počkejte, test je téměř dokončen…Načítám stránku bez reklam…Stránka s reklamami:Stránka bez reklam:Bez reklam je to o $1 rychlejší!S reklamami je to o $1 rychlejší!Spustit testRYCHLEJŠÍBlokovat reklamu na $1EasyListEasyPrivacyVarování při odstranění blokování reklamBlokování škodlivých programůNoCoin (ochrana před zneužitím kryptoměny)Stiskem změňte nastavení úspory energie baterieRežim úspory energie baterieŠetřete energii baterie a surfujte déleŠetřete ještě více energie baterie blokováním reklam!Šetřete energii baterie a surfujte až o 50% déleVždy zobrazit na liště ikonu bateriepři odpojenípři 80% energie bateriepři 50% energie bateriepři 20% energie bateriePovolit režim úspory energie baterieŠetřit energii baterie automatickyEmulated battery levelZapněte a šetřete energii baterieŠetříte energii baterin;
        if ($nextEl) {
          isHidden = $nextEl.hasClass(swiper.params.navigation.hiddenClass);
        } else if ($prevEl) {
          isHidden = $prevEl.hasClass(swiper.params.navigation.hiddenClass);
        }
        if (isHidden === true) {
          swiper.emit('navigationShow', swiper);
        } else {
          swiper.emit('navigationHide', swiper);
        }
        if ($nextEl) {
          $nextEl.toggleClass(swiper.params.navigation.hiddenClass);
        }
        if ($prevEl) {
          $prevEl.toggleClass(swiper.params.navigation.hiddenClass);
        }
      }
    },
  },
};

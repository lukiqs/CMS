/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var switch_1 = false;
var switch_2 = false;
var registerLike = null;
var know = null;

$(document).ready(function(){
    
//    $( "#dialog" ).dialog({
//        autoOpen: false,
//        minWidth: $(window).width()*0.5,
//        open: function(event, ui){
//        setTimeout("$('#dialog').dialog('close')",2000);
//      }
//    }).prev(".ui-dialog-titlebar").css("background","white");
    
    loadSwitch();
    
    $("#switch_1").click(function() {
        if(switch_1){
            switch_1 = false;
            loadSwitch();
        }
        else{
           switch_1 = true;
            loadSwitch();
        }
    });
    
    $("#switch_2").click(function() {
        if(switch_2){
            switch_2 = false;
            loadSwitch();
        }
        else{
           switch_2 = true;
            loadSwitch();
        }
    });
    
    $("#register").click(function() {
        var temp = false;
        
        if(registerLike == null || registerLike == "Wybierz"){
            incorrectField("registerLike");     
            return;
        }
        
        if(registerLike == "Pomóż dziecku"){
            if(document.getElementById("DataNameSur").value == ""){
                incorrectField("DataNameSur");
                temp = true;
            }
        }
        else if(registerLike == "Pasje"){
            temp = false;
            if(document.getElementById("DataNameSur").value == ""){
                incorrectField("DataNameSur");
                temp = true;
            }
            if(document.getElementById("DataFunc").value == ""){
                incorrectField("DataFunc");
                temp = true;
            }
        }
        else if(registerLike == "Szkoła"){
            if(document.getElementById("DataFunc").value == ""){
                incorrectField("DataFunc");
                temp = true;
            }
        }
        else if(registerLike == "Rada rodziców"){
            if(document.getElementById("DataNameSur").value == ""){
                incorrectField("DataNameSur");
                temp = true;
            }
            if(document.getElementById("DataFunc").value == ""){
                incorrectField("DataFunc");
                temp = true;
            }
        }
        else if(registerLike == "Klub sportowy (UKS)"){
            if(document.getElementById("DataFunc").value == ""){
                incorrectField("DataFunc");
                temp = true;
            }
        }
        
        
        //the fields is in all register mode.
        if(document.getElementById("know").value == "Wybierz"){
                incorrectField("know");
                temp = true;
        }
        if(document.getElementById("DataPostCode").value == ""){
                incorrectField("DataPostCode");
                temp = true;
        }
        if(document.getElementById("DataAddressBen").value == ""){
                incorrectField("DataAddressBen");
                temp = true;
        }
        if(document.getElementById("DataVoivodeship").value == "Województwo"){
                incorrectField("DataVoivodeship");
                temp = true;
        }
        if(document.getElementById("DataCity").value == "Miasto"){
                incorrectField("DataCity");
                temp = true;
        }
        if(document.getElementById("DataNameRep").value == ""){
                incorrectField("DataNameRep");
                temp = true;
        } 
        if(document.getElementById("DataName").value == ""){
                incorrectField("DataName");
                temp = true;
        }
        
        if(temp) return;
        
        sendDataRegister();
    });
});

function sendDataRegister(){
    if(switch_1 && switch_2) 
    $.ajax({
            type: "POST",
            url: "",
            dataType : "json",
            data: {
               send : true,
               registerLike: registerLike,
               DataNameSur: document.getElementById("DataNameSur").value,
               DataName: document.getElementById("DataName").value,
               DataRegon: document.getElementById("DataRegon").value,
               DataNip: document.getElementById("DataNip").value,
               DataAddressBen: document.getElementById("DataAddressBen").value,
               DataPhoneBen: document.getElementById("DataPhoneBen").value,
               DataVoivodeship: document.getElementById("DataVoivodeship").value,
               DataCity: document.getElementById("DataCity").value,
               DataPostCode: document.getElementById("DataPostCode").value,
               DataMailBen: document.getElementById("DataMailBen").value,
               DataWWW: document.getElementById("DataWWW").value,
               DataBank: document.getElementById("DataBank").value,
               DataBankName: document.getElementById("DataBankName").value,
               DataBankNumber: document.getElementById("DataBankNumber").value,
               DataNameRep: document.getElementById("DataNameRep").value,
               DataFunc: document.getElementById("DataFunc").value,
               DataPhoneRep: document.getElementById("DataPhoneRep").value,
               DataMailRep: document.getElementById("DataMailRep").value,
               know: know,
               knowField: document.getElementById("knowField").value,
            },
            success : function(json) {
                location.reload();
            }
            ,error: function(err) {
                //alert(JSON.stringify(err));
            }
        });
}


function loadSwitch(){
    if(switch_1)
        document.getElementById("switch_1").innerHTML = '<font size="4px" color="green"><i class="fa fa-check-square-o" aria-hidden="true"></i></font>';
    else
        document.getElementById("switch_1").innerHTML = '<font size="4px" color="#d43f3a"><i class="fa fa-square-o" aria-hidden="true"></i></font>';
    
    if(switch_2)
        document.getElementById("switch_2").innerHTML = '<font size="4px" color="green"><i class="fa fa-check-square-o" aria-hidden="true"></i></font>';
    else
        document.getElementById("switch_2").innerHTML = '<font size="4px" color="#d43f3a"><i class="fa fa-square-o" aria-hidden="true"></i></font>';
}

function changeRegister(){
    registerLike = document.getElementById("registerLike").value;
    
    if(registerLike == "Pomóż dziecku"){
        //document.getElementById("nameDataBen").style.display = "block";
        document.getElementById("DataBen").style.display = "block";
        document.getElementById("DataNameSur").style.display = "block";
        document.getElementById("DataName").style.display = "block";
        document.getElementById("DataName").placeholder = "Symbol przyczyny niepełnosprawności (wymagane)";
        document.getElementById("DataRegon").style.display = "none";
        document.getElementById("DataNip").style.display = "none";
        document.getElementById("DataWWW").style.display = "none";
        document.getElementById("DataFunc").style.display = "none";
        document.getElementById("nameDataBank").style.display = "block";
        document.getElementById("nameDataBankForm").style.display = "block";
        document.getElementById("nameDataRep").style.display = "block";
        document.getElementById("nameDataRepForm").style.display = "block";
        document.getElementById("nameDataDoc").style.display = "block";
        document.getElementById("nameDataDocForm").style.display = "block";
        document.getElementById("nameDataQ").style.display = "block";
        document.getElementById("nameDataQForm").style.display = "block";
        document.getElementById("nameDataFile").style.display = "block";
        document.getElementById("nameDataFileForm").style.display = "block";
        correctField("registerLike");
    }
    else if(registerLike == "Pasje"){
        document.getElementById("nameDataBen").style.display = "block";
        document.getElementById("DataBen").style.display = "block";
        document.getElementById("DataNameSur").style.display = "block";
        document.getElementById("DataName").style.display = "block";
        document.getElementById("DataName").placeholder = "Nazwa (wymagane)";
        document.getElementById("DataRegon").style.display = "block";
        document.getElementById("DataNip").style.display = "block";
        document.getElementById("DataWWW").style.display = "block";
        document.getElementById("DataFunc").style.display = "block";
        document.getElementById("nameDataBank").style.display = "block";
        document.getElementById("nameDataBankForm").style.display = "block";
        document.getElementById("nameDataRep").style.display = "block";
        document.getElementById("nameDataRepForm").style.display = "block";
        document.getElementById("nameDataDoc").style.display = "block";
        document.getElementById("nameDataDocForm").style.display = "block";
        document.getElementById("nameDataQ").style.display = "block";
        document.getElementById("nameDataQForm").style.display = "block";
        correctField("registerLike");
    }
    else if(registerLike == "Szkoła"){
        document.getElementById("nameDataBen").style.display = "block";
        document.getElementById("DataBen").style.display = "block";
        document.getElementById("DataNameSur").style.display = "none";
        document.getElementById("DataName").style.display = "block";
        document.getElementById("DataName").placeholder = "Nazwa (wymagane)";
        document.getElementById("DataRegon").style.display = "block";
        document.getElementById("DataNip").style.display = "block";
        document.getElementById("DataWWW").style.display = "block";
        document.getElementById("DataFunc").style.display = "block";
        document.getElementById("nameDataBank").style.display = "block";
        document.getElementById("nameDataBankForm").style.display = "block";
        document.getElementById("nameDataRep").style.display = "block";
        document.getElementById("nameDataRepForm").style.display = "block";
        document.getElementById("nameDataDoc").style.display = "block";
        document.getElementById("nameDataDocForm").style.display = "block";
        document.getElementById("nameDataQ").style.display = "block";
        document.getElementById("nameDataQForm").style.display = "block";
        correctField("registerLike");
    }
    else if(registerLike == "Rada rodziców"){
        document.getElementById("nameDataBen").style.display = "block";
        document.getElementById("DataBen").style.display = "block";
        document.getElementById("DataNameSur").style.display = "block";
        document.getElementById("DataName").style.display = "block";
        document.getElementById("DataName").placeholder = "Nazwa (wymagane)";
        document.getElementById("DataRegon").style.display = "block";
        document.getElementById("DataNip").style.display = "block";
        document.getElementById("DataWWW").style.display = "block";
        document.getElementById("DataFunc").style.display = "block";
        document.getElementById("nameDataBank").style.display = "block";
        document.getElementById("nameDataBankForm").style.display = "block";
        document.getElementById("nameDataRep").style.display = "block";
        document.getElementById("nameDataRepForm").style.display = "block";
        document.getElementById("nameDataDoc").style.display = "block";
        document.getElementById("nameDataDocForm").style.display = "block";
        document.getElementById("nameDataQ").style.display = "block";
        document.getElementById("nameDataQForm").style.display = "block";
        correctField("registerLike");
    }
    else if(registerLike == "Klub sportowy (UKS)"){
        document.getElementById("nameDataBen").style.display = "block";
        document.getElementById("DataBen").style.display = "block";
        document.getElementById("DataNameSur").style.display = "none";
        document.getElementById("DataName").style.display = "block";
        document.getElementById("DataName").placeholder = "Nazwa (wymagane)";
        document.getElementById("DataRegon").style.display = "block";
        document.getElementById("DataNip").style.display = "block";
        document.getElementById("DataWWW").style.display = "block";
        document.getElementById("DataFunc").style.display = "block";
        document.getElementById("nameDataBank").style.display = "block";
        document.getElementById("nameDataBankForm").style.display = "block";
        document.getElementById("nameDataRep").style.display = "block";
        document.getElementById("nameDataRepForm").style.display = "block";
        document.getElementById("nameDataDoc").style.display = "block";
        document.getElementById("nameDataDocForm").style.display = "block";
        document.getElementById("nameDataQ").style.display = "block";
        document.getElementById("nameDataQForm").style.display = "block";
        correctField("registerLike");
    }
    else if(registerLike == "Wybierz"){
        document.getElementById("nameDataBen").style.display = "none";
        document.getElementById("DataBen").style.display = "none";
        document.getElementById("DataNameSur").style.display = "none";
        document.getElementById("DataName").style.display = "none";
        document.getElementById("DataRegon").style.display = "none";
        document.getElementById("DataNip").style.display = "none";
        document.getElementById("DataWWW").style.display = "none";
        document.getElementById("DataFunc").style.display = "none";
        document.getElementById("nameDataBank").style.display = "none";
        document.getElementById("nameDataBankForm").style.display = "none";
        document.getElementById("nameDataRep").style.display = "none";
        document.getElementById("nameDataRepForm").style.display = "none";
        document.getElementById("nameDataDoc").style.display = "none";
        document.getElementById("nameDataDocForm").style.display = "none";
        document.getElementById("nameDataQ").style.display = "none";
        document.getElementById("nameDataQForm").style.display = "none";
        document.getElementById("nameDataFile").style.display = "none";
        document.getElementById("nameDataFileForm").style.display = "none";
        incorrectField("registerLike");
    }
}

function changeKnow(){
    know = document.getElementById("know").value;
    
    if(know == "ze strony internetowej"){
        document.getElementById("knowField").disabled = true;
        document.getElementById("knowField").placeholder = "";
        correctField("know");
    }
    else if(know == "od osób uczestniczących w akcji"){
        document.getElementById("knowField").disabled = true;
        document.getElementById("knowField").placeholder = "";
        correctField("know");
    }
    else if(know == "z maila"){
        document.getElementById("knowField").disabled = false;
        document.getElementById("knowField").placeholder = "Podaj adres mail";
        correctField("know");
    }
    else if(know == "inne"){
        document.getElementById("knowField").disabled = false;
        document.getElementById("knowField").placeholder = "Podaj jak się dowiedziałeś";
        correctField("know");
    }
    else if(know == "Wybierz"){
        document.getElementById("knowField").disabled = false;
        document.getElementById("knowField").placeholder = "";
        incorrectField("know");
    }
}

function changeVoivodeship(){
    voivodeship = document.getElementById("DataVoivodeship").value;
    
    if(voivodeship == "dolnośląskie"){
        array = ['Bardo',
'Bielawa',
'Bierutów',
'Bogatynia',
'Boguszów-Gorce',
'Bolesławiec',
'Bolków',
'Brzeg Dolny',
'Bystrzyca Kłodzka',
'Chocianów',
'Chojnów',
'Duszniki Zdrój',
'Dzierżoniów',
'Głogów',
'Głuszyca',
'Góra',
'Gryfów Śląski',
'Jawor',
'Jaworzyna Śląska',
'Jedlina Zdrój',
'Jelcz-Laskowice',
'Jelenia Góra',
'Kamienna Góra',
'Karpacz',
'Kąty Wrocławskie',
'Kłodzko',
'Kowary',
'Kudowa Zdrój',
'Lądek Zdrój',
'Legnica',
'Leśna',
'Lubań',
'Lubawka',
'Lubin',
'Lubomierz',
'Lwówek Śląski',
'Mieroszów',
'Międzybórz',
'Międzylesie',
'Milicz',
'Mirsk',
'Niemcza',
'Nowa Ruda',
'Nowogrodziec',
'Oborniki Śląskie',
'Oleśnica',
'Oława',
'Piechowice',
'Pieńsk',
'Pieszyce',
'Piława Górna',
'Polanica Zdrój',
'Polkowice',
'Prochowice',
'Prusice',
'Przemków',
'Radków',
'Siechnice',
'Sobótka',
'Stronie Śląskie',
'Strzegom',
'Strzelin',
'Syców',
'Szczawno Zdrój',
'Szczytna',
'Szklarska Poręba',
'Ścinawa',
'Środa Śląska',
'Świdnica',
'Świebodzice',
'Świeradów Zdrój',
'Świerzawa',
'Trzebnica',
'Twardogóra',
'Wałbrzych',
'Wąsosz',
'Węgliniec',
'Wiązów',
'Wleń',
'Wojcieszów',
'Wołów',
'Wrocław',
'Zawidów',
'Ząbkowice Śląskie',
'Zgorzelec',
'Ziębice',
'Złotoryja',
'Złoty Stok',
'Żarów',
'Żmigród'];
        fieldCity(array);
        correctField("DataVoivodeship");
        correctField('DataCity');
    }
    else if(voivodeship == "kujawsko-pomorskie"){
        array = ['Aleksandrów Kujawski',
'Barcin',
'Brodnica',
'Brześć Kujawski',
'Bydgoszcz',
'Chełmno',
'Chełmża',
'Chodecz',
'Ciechocinek',
'Dobrzyń nad Wisłą',
'Gniewkowo',
'Golub-Dobrzyń',
'Górzno',
'Grudziądz',
'Inowrocław',
'Izbica Kujawska',
'Jabłonowo Pomorskie',
'Janikowo',
'Janowiec Wielkopolski',
'Kamień Krajeński',
'Kcynia',
'Koronowo',
'Kowal',
'Kowalewo Pomorskie',
'Kruszwica',
'Lipno',
'Lubień Kujawski',
'Lubraniec',
'Łabiszyn',
'Łasin',
'Mogilno',
'Mrocza',
'Nakło nad Notecią',
'Nieszawa',
'Nowe',
'Pakość',
'Piotrków Kujawski',
'Radziejów',
'Radzyń Chełmiński',
'Rypin',
'Sępólno Krajeńskie',
'Skępe',
'Solec Kujawski',
'Strzelno',
'Szubin',
'Świecie',
'Toruń',
'Tuchola',
'Wąbrzeźno',
'Więcbork',
'Włocławek',
'Żnin'];
        fieldCity(array);
        correctField("DataVoivodeship");
        correctField('DataCity');
    }
    else if(voivodeship == "lubelskie"){
        array = ['Annopol',
'Bełżyce',
'Biała Podlaska',
'Biłgoraj',
'Bychawa',
'Chełm',
'Dęblin',
'Frampol',
'Hrubieszów',
'Janów Lubelski',
'Józefów',
'Kazimierz Dolny',
'Kock',
'Krasnobród',
'Krasnystaw',
'Kraśnik',
'Lubartów',
'Lublin',
'Łęczna',
'Łuków',
'Międzyrzec Podlaski',
'Nałęczów',
'Opole Lubelskie',
'Ostrów Lubelski',
'Parczew',
'Piaski',
'Poniatowa',
'Puławy',
'Radzyń Podlaski',
'Rejowiec Fabryczny',
'Ryki',
'Stoczek Łukowski',
'Szczebrzeszyn',
'Świdnik',
'Tarnogród',
'Terespol',
'Tomaszów Lubelski',
'Włodawa',
'Zamość',
'Zwierzyniec'];
        fieldCity(array);
        correctField("DataVoivodeship");
        correctField('DataCity');
    }
    else if(voivodeship == "lubuskie"){
        array = ['Babimost',
'Bytom Odrzański',
'Cybinka',
'Czerwieńsk',
'Dobiegniew',
'Drezdenko',
'Gorzów Wielkopolski',
'Gozdnica',
'Gubin',
'Iłowa',
'Jasień',
'Kargowa',
'Kostrzyn',
'Kożuchów',
'Krosno Odrzańskie',
'Lubniewice',
'Lubsko',
'Łęknica',
'Małomice',
'Międzyrzecz',
'Nowa Sól',
'Nowe Miasteczko',
'Nowogród Bobrzański',
'Ośno Lubuskie',
'Rzepin',
'Skwierzyna',
'Sława',
'Słubice',
'Strzelce Krajeńskie',
'Sulechów',
'Sulęcin',
'Szlichtyngowa',
'Szprotawa',
'Świebodzin',
'Torzym',
'Trzciel',
'Witnica',
'Wschowa',
'Zbąszynek',
'Zielona Góra',
'Żagań',
'Żary'];
        fieldCity(array);
        correctField("DataVoivodeship");
        correctField('DataCity');
    }
    else if(voivodeship == "łódzkie"){
        array = ['Aleksandrów Łódzki',
'Bełchatów',
'Biała Rawska',
'Błaszki',
'Brzeziny',
'Drzewica',
'Działoszyn',
'Głowno',
'Kamieńsk',
'Koluszki',
'Konstantynów Łódzki',
'Krośniewice',
'Kutno',
'Łask',
'Łęczyca',
'Łowicz',
'Łódź',
'Opoczno',
'Ozorków',
'Pabianice',
'Pajęczno',
'Piotrków Trybunalski',
'Poddębice',
'Przedbórz',
'Radomsko',
'Rawa Mazowiecka',
'Sieradz',
'Skierniewice',
'Stryków',
'Sulejów',
'Szadek',
'Tomaszów Mazowiecki',
'Tuszyn',
'Uniejów',
'Warta',
'Wieluń',
'Wieruszów',
'Zduńska Wola',
'Zelów',
'Zgierz',
'Złoczew',
'Żychlin'];
        fieldCity(array);
        correctField("DataVoivodeship");
        correctField('DataCity');
    }
    else if(voivodeship == "małopolskie"){
        array = ['Alwernia',
'Andrychów',
'Biecz',
'Bochnia',
'Brzesko',
'Brzeszcze',
'Bukowno',
'Chełmek',
'Chrzanów',
'Ciężkowice',
'Czchów',
'Dąbrowa Tarnowska',
'Dobczyce',
'Gorlice',
'Grybów',
'Jordanów',
'Kalwaria Zebrzydowska',
'Kęty',
'Kraków',
'Krynica',
'Krzeszowice',
'Libiąż',
'Limanowa',
'Maków Podhalański',
'Miechów',
'Mszana Dolna',
'Muszyna',
'Myślenice',
'Niepołomice',
'Nowy Sącz',
'Nowy Targ',
'Nowy Wiśnicz',
'Olkusz',
'Oświęcim',
'Piwniczna Zdrój',
'Proszowice',
'Rabka',
'Skała',
'Skawina',
'Sławków',
'Słomniki',
'Stary Sącz',
'Sucha Beskidzka',
'Sułkowice',
'Szczawnica',
'Świątniki Górne',
'Tarnów',
'Trzebinia',
'Tuchów',
'Wadowice',
'Wieliczka',
'Wolbrom',
'Zakopane',
'Zator',
'Żabno'];
        fieldCity(array);
        correctField("DataVoivodeship");
        correctField('DataCity');
    }
    else if(voivodeship == "mazowieckie"){
        array = ['Białobrzegi',
'Bieżuń',
'Błonie',
'Brok',
'Brwinów',
'Chorzele',
'Ciechanów',
'Drobin',
'Garwolin',
'Gąbin',
'Glinojeck',
'Gostynin',
'Góra Kalwaria',
'Grodzisk Mazowiecki',
'Grójec',
'Iłża',
'Józefów',
'Kałuszyn',
'Karczew',
'Kobyłka',
'Konstancin-Jeziorna',
'Kosów Lacki',
'Kozienice',
'Legionowo',
'Lipsko',
'Łaskarzew',
'Łochów',
'Łomianki',
'Łosice',
'Maków Mazowiecki',
'Marki',
'Milanówek',
'Mińsk Mazowiecki',
'Mława',
'Mogielnica',
'Mordy',
'Mszczonów',
'Myszyniec',
'Nasielsk',
'Nowe Miasto nad Pilicą',
'Nowy Dwór Mazowiecki',
'Ostrołęka',
'Ostrów Mazowiecka',
'Otwock',
'Ożarów Mazowiecki',
'Piaseczno',
'Piastów',
'Pilawa',
'Pionki',
'Płock',
'Płońsk',
'Podkowa Leśna',
'Pruszków',
'Przasnysz',
'Przysucha',
'Pułtusk',
'Raciąż',
'Radom',
'Radzymin',
'Różan',
'Serock',
'Siedlce',
'Sierpc',
'Skaryszew',
'Sochaczew',
'Sokołów Podlaski',
'Sulejówek',
'Szydłowiec',
'Tłuszcz',
'Warka',
'Warszawa',
'Wesoła',
'Węgrów',
'Wołomin',
'Wyszków',
'Wyszogród',
'Wyśmierzyce',
'Zakroczym',
'Ząbki',
'Zielonka',
'Zwoleń',
'Żelechów',
'Żuromin',
'Żyrardów'];
        fieldCity(array);
        correctField("DataVoivodeship");
        correctField('DataCity');
    }
    else if(voivodeship == "opolskie"){
        array = ['Baborów',
'Biała',
'Brzeg',
'Byczyna',
'Dobrodzień',
'Głogówek',
'Głubczyce',
'Głuchołazy',
'Gogolin',
'Gorzów Śląski',
'Grodków',
'Kędzierzyn-Koźle',
'Kietrz',
'Kluczbork',
'Kolonowskie',
'Korfantów',
'Krapkowice',
'Leśnica',
'Lewin Brzeski',
'Namysłów',
'Niemodlin',
'Nysa',
'Olesno',
'Opole',
'Otmuchów',
'Ozimek',
'Paczków',
'Praszka',
'Prudnik',
'Strzelce Opolskie',
'Ujazd',
'Wołczyn',
'Zawadzkie',
'Zdzieszowice'];
        fieldCity(array);
        correctField("DataVoivodeship");
        correctField('DataCity');
    }
    else if(voivodeship == "podkarpackie"){
        array = ['Baranów Sandomierski',
'Błażowa',
'Brzozów',
'Cieszanów',
'Dębica',
'Dukla',
'Dynów',
'Głogów Małopolski',
'Iwonicz Zdrój',
'Jarosław',
'Jasło',
'Jedlicze',
'Kańczuga',
'Kolbuszowa',
'Krosno',
'Lesko',
'Leżajsk',
'Lubaczów',
'Łańcut',
'Mielec',
'Narol',
'Nisko',
'Nowa Dęba',
'Nowa Sarzyna',
'Oleszyce',
'Pilzno',
'Przemyśl',
'Przeworsk',
'Radomyśl Wielki',
'Radymno',
'Ropczyce',
'Rudnik nad Sanem',
'Rymanów',
'Rzeszów',
'Sanok',
'Sędziszów Małopolski',
'Sieniawa',
'Sokołów Małopolski',
'Stalowa Wola',
'Strzyżów',
'Tarnobrzeg',
'Tyczyn',
'Ulanów',
'Ustrzyki Dolne',
'Zagórz'];
        fieldCity(array);
        correctField("DataVoivodeship");
        correctField('DataCity');
    }
    else if(voivodeship == "podlaskie"){
        array = ['Augustów',
'Białystok',
'Bielsk Podlaski',
'Brańsk',
'Choroszcz',
'Ciechanowiec',
'Czarna Białostocka',
'Dąbrowa Białostocka',
'Drohiczyn',
'Goniądz',
'Grajewo',
'Hajnówka',
'Jedwabne',
'Kleszczele',
'Knyszyn',
'Kolno',
'Lipsk',
'Łapy',
'Łomża',
'Mońki',
'Nowogród',
'Rajgród',
'Sejny',
'Siemiatycze',
'Sokółka',
'Stawiski',
'Suchowola',
'Supraśl',
'Suraż',
'Suwałki',
'Szczuczyn',
'Tykocin',
'Wasilków',
'Wysokie Mazowieckie',
'Zabłudów',
'Zambrów'];
        fieldCity(array);
        correctField("DataVoivodeship");
        correctField('DataCity');
    }
    else if(voivodeship == "pomorskie"){
        array = ['Brusy',
'Bytów',
'Chojnice',
'Czarna Woda',
'Czarne',
'Czersk',
'Człuchów',
'Debrzno',
'Dzierzgoń',
'Gdańsk',
'Gdynia',
'Gniew',
'Hel',
'Jastarnia',
'Kartuzy',
'Kościerzyna',
'Krynica Morska',
'Kwidzyn',
'Lębork',
'Łeba',
'Malbork',
'Miastko',
'Nowy Dwór Gdański',
'Nowy Staw',
'Pelplin',
'Prabuty',
'Pruszcz Gdański',
'Puck',
'Reda',
'Rumia',
'Skarszewy',
'Skórcz',
'Słupsk',
'Sopot',
'Starogard Gdański',
'Sztum',
'Tczew',
'Ustka',
'Wejherowo',
'Władysławowo',
'Żukowo'];
        fieldCity(array);
        correctField("DataVoivodeship");
        correctField('DataCity');
    }
    else if(voivodeship == "śląskie"){
        array = ['Będzin',
'Bielsko-Biała',
'Bieruń',
'Blachownia',
'Bytom',
'Chorzów',
'Cieszyn',
'Czechowice-Dziedzice',
'Czeladź',
'Czerwionka-Leszczyny',
'Częstochowa',
'Dąbrowa Górnicza',
'Gliwice',
'Imielin',
'Jastrzębie Zdrój',
'Jaworzno',
'Kalety',
'Katowice',
'Kłobuck',
'Knurów',
'Koniecpol',
'Koziegłowy',
'Krzepice',
'Kuźnia Raciborska',
'Lędziny',
'Lubliniec',
'Łaziska Górne',
'Łazy',
'Miasteczko Śląskie',
'Mikołów',
'Mysłowice',
'Myszków',
'Ogrodzieniec',
'Orzesze',
'Piekary Śląskie',
'Pilica',
'Poręba',
'Pszczyna',
'Pszów',
'Pyskowice',
'Racibórz',
'Radlin',
'Radzionków',
'Ruda Śląska',
'Rybnik',
'Rydułtowy',
'Siemianowice Śląskie',
'Siewierz',
'Skoczów',
'Sosnowiec',
'Sośnicowice',
'Strumień',
'Szczekociny',
'Szczyrk',
'Świętochłowice',
'Tarnowskie Góry',
'Toszek',
'Tychy',
'Ustroń',
'Wilamowice',
'Wisła',
'Wodzisław Śląski',
'Wojkowice',
'Woźniki',
'Zabrze',
'Zawiercie',
'Żarki',
'Żory',
'Żywiec'];
        fieldCity(array);
        correctField("DataVoivodeship");
        correctField('DataCity');
    }
    else if(voivodeship == "świętokrzyskie"){
        array = ['Bodzentyn',
'Busko Zdrój',
'Chęciny',
'Chmielnik',
'Ćmielów',
'Działoszyce',
'Jędrzejów',
'Kazimierza Wielka',
'Kielce',
'Końskie',
'Kunów',
'Małogoszcz',
'Opatów',
'Osiek',
'Ostrowiec Świętokrzyski',
'Ożarów',
'Pińczów',
'Połaniec',
'Sandomierz',
'Sędziszów',
'Skalbmierz',
'Skarżysko-Kamienna',
'Starachowice',
'Staszów',
'Stąporków',
'Suchedniów',
'Wąchock',
'Włoszczowa',
'Zawichost'];
        fieldCity(array);
        correctField("DataVoivodeship");
        correctField('DataCity');
    }
    else if(voivodeship == "warmińsko-mazurskie"){
        array = ['Barczewo',
'Bartoszyce',
'Biała Piska',
'Biskupiec',
'Bisztynek',
'Braniewo',
'Dobre Miasto',
'Działdowo',
'Elbląg',
'Ełk',
'Frombork',
'Giżycko',
'Gołdap',
'Górowo Iławeckie',
'Iława',
'Jeziorany',
'Kętrzyn',
'Kisielice',
'Korsze',
'Lidzbark',
'Lidzbark Warmiński',
'Lubawa',
'Mikołajki',
'Miłakowo',
'Miłomłyn',
'Młynary',
'Morąg',
'Mrągowo',
'Nidzica',
'Nowe Miasto Lubawskie',
'Olecko',
'Olsztyn',
'Olsztynek',
'Orneta',
'Orzysz',
'Ostróda',
'Pasłęk',
'Pasym',
'Pieniężno',
'Pisz',
'Reszel',
'Ruciane-Nida',
'Ryn',
'Sępopol',
'Susz',
'Szczytno',
'Tolkmicko',
'Węgorzewo',
'Zalewo'];
        fieldCity(array);
        correctField("DataVoivodeship");
        correctField('DataCity');
    }
    else if(voivodeship == "wielkopolskie"){
        array = ['Bojanowo',
'Borek Wielkopolski',
'Buk',
'Chodzież',
'Czarnków',
'Czempiń',
'Czerniejewo',
'Dąbie',
'Dobra',
'Dolsk',
'Gniezno',
'Golina',
'Gołańcz',
'Gostyń',
'Grabów nad Prosną',
'Grodzisk Wielkopolski',
'Jarocin',
'Jastrowie',
'Jutrosin',
'Kalisz',
'Kępno',
'Kleczew',
'Kłecko',
'Kłodawa',
'Kobylin',
'Koło',
'Konin',
'Kostrzyn',
'Kościan',
'Koźmin Wielkopolski',
'Kórnik',
'Krajenka',
'Krobia',
'Krotoszyn',
'Krzywiń',
'Krzyż Wielkopolski',
'Książ Wielkopolski',
'Leszno',
'Luboń',
'Lwówek',
'Łobżenica',
'Margonin',
'Miejska Górka',
'Międzychód',
'Mikstat',
'Miłosław',
'Mosina',
'Murowana Goślina',
'Nekla',
'Nowe Skalmierzyce',
'Nowy Tomyśl',
'Oborniki',
'Obrzycko',
'Odolanów',
'Okonek',
'Opalenica',
'Osieczna',
'Ostroróg',
'Ostrów Wielkopolski',
'Ostrzeszów',
'Piła',
'Pleszew',
'Pniewy',
'Pobiedziska',
'Pogorzela',
'Poniec',
'Poznań',
'Przedecz',
'Puszczykowo',
'Pyzdry',
'Rakoniewice',
'Raszków',
'Rawicz',
'Rogoźno',
'Rychwał',
'Rydzyna',
'Sieraków',
'Skoki',
'Słupca',
'Sompolno',
'Stawiszyn',
'Stęszew',
'Sulmierzyce',
'Swarzędz',
'Szamocin',
'Szamotuły',
'Ślesin',
'Śmigiel',
'Śrem',
'Środa Wielkopolska',
'Trzcianka',
'Trzemeszno',
'Tuliszków',
'Turek',
'Ujście',
'Wągrowiec',
'Wieleń',
'Wielichowo',
'Witkowo',
'Wolsztyn',
'Wronki',
'Września',
'Wyrzysk',
'Wysoka',
'Zagórów',
'Zbąszyń',
'Zduny',
'Złotów',
'Żerków'];
        fieldCity(array);
        correctField("DataVoivodeship");
        correctField('DataCity');
    }
    else if(voivodeship == "zachodniopomorskie"){
        array = ['Barlinek',
'Barwice',
'Białogard',
'Biały Bór',
'Bobolice',
'Borne Sulinowo',
'Cedynia',
'Chociwel',
'Chojna',
'Choszczno',
'Czaplinek',
'Człopa',
'Darłowo',
'Dębno',
'Dobra',
'Dobrzany',
'Drawno',
'Drawsko Pomorskie',
'Golczewo',
'Goleniów',
'Gryfice',
'Gryfino',
'Ińsko',
'Kalisz Pomorski',
'Kamień Pomorski',
'Karlino',
'Kępice',
'Kołobrzeg',
'Koszalin',
'Lipiany',
'Łobez',
'Maszewo',
'Mieszkowice',
'Międzyzdroje',
'Mirosławiec',
'Moryń',
'Myślibórz',
'Nowe Warpno',
'Nowogard',
'Pełczyce',
'Płoty',
'Polanów',
'Police',
'Połczyn Zdrój',
'Pyrzyce',
'Recz',
'Resko',
'Sianów',
'Sławno',
'Stargard Szczeciński',
'Suchań',
'Szczecin',
'Szczecinek',
'Świdwin',
'Świnoujście',
'Trzcińsko Zdrój',
'Trzebiatów',
'Tuczno',
'Wałcz',
'Węgorzyno',
'Wolin',
'Złocieniec'];
        fieldCity(array);
        correctField("DataVoivodeship");
        correctField('DataCity');
    }
    else{
        array = [];
        fieldCity(array);
        incorrectField("DataVoivodeship");
        incorrectField("DataCity");
    }
}

function incorrectField(idElement){ 
    document.getElementById(idElement).style.backgroundColor = "#EFABAB";
    document.getElementById(idElement).style.color = "white";
}

function correctField(idElement){ 
    document.getElementById(idElement).style.backgroundColor = "white";
    document.getElementById(idElement).style.color = "gray";
}

function fieldCity(array){
    var cities; 
    for (i = 0; i < array.length; i++) { 
        cities += "<option>" + array[i] + "</option>";
    }
    document.getElementById("DataCity").innerHTML = cities;
}
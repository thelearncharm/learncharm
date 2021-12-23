
var stateObject = {
  "India": {
    "Andhra Pradesh": ["Adilabad","Adoni", "Amadalavalasa","Amalapuram","Anakapalle","Anantapur","Asifabad","Badepalle", "Bandarulanka", "Bapatla", "Bellampalle", "Bethamcherla","Bhadrachalam","Bhainsa","Bheemunipatnam","Bhimavaram", "Bhongir", "Bobbili","Bodhan","Bollaram","Bugganipalle","Chandur","Chatakonda","Chilakaluripet","Chintalavalasa","Chirala","Chittoor","Choutuppal","Cuddapah","Devarakonda","Dharmavaram","Dommara Nandyala","Eddumailaram","Ekambarakuppam","Eluru","Farooqnagar","Gadwal","Gajapathinagaram","Ghatkesar","Gooty","Gudivada","Gudivada","Gudur","Guntakal","Guntur","Hindupur","Hyderabad","Ichchapuram","Isnapur","Jaggaiahpet","Jagtial","Jallaram","Jammalamadugu","Jangaon","Jarjapupeta","Kadiri","Kagaznagar","Kakinada","Kalyandurg","Kamareddy","Kandukur","Kantabamsuguda","Karimnagar","Kavali","Khammam","Koratla","Kothagudem","Kothavalasa","Kovurpalle","Kovvur","Kuppam","Kurnool","Kyathampalle","Macherla","Machilipatnam","Madanapalle","Madaram","Mahbubnagar","Mancherial","Mandamarri","Mandapeta","Manuguru","Markapur","Medak","Miryalaguda","Moragudi","Nagari","Nagarkurnool","Nalgonda","Nandyal","Narasapur","Narasaraopet","Narayanavanam","Narayanavanam","Narsingi","Narsipatnam","Nellimarla","Nellore","Nidadavole","Nirmal","Nizamabad","Nuzvid","Omerkhan Daira","Ongole","Palacole","Palakurthy","Palasa Kasibugga","Palwancha","Pamur","Papampeta","Parvathipuram","Pedana","Peddapuram","Pithapuram","Ponnur","Proddatur","Punganur","Puttur","Rajahmundry","Rajam","Ramachandrapuram","Ramagundam","Ramapuram","Rameswaram","Rampachodavaram","Rayachoti","Rayadurg","Renigunta","Repalle","Sadasivpet","Salur","Samalkot","Sangareddy","Sarapaka","Sattenapalle","Siddipet","Singapur","Singarayakonda","Sircilla","Sompeta","Srikakulam","Srikalahasti","Sriramnagar","Srisailam","Srisailamgudem Devasthanam","Suryapet","Tadepalligudem","Tadpatri","Tandur","Tanuku","Tenali","Thallapalle","Tirumala","Tirupati","Tuni","Upper Sileru","Uravakonda","Venkatagiri","Veparala","Vicarabad","Vijayapuri","Vijayawada","Vinukonda","Visakhapatnam","Vizianagaram","Wanaparthy","Warangal","Yadagirigutta","Yellandu","Yemmiganur","Yerraguntla","Zahirabad"],
    "Arunachal Pradesh	": ["Along","Basar","Bomdila","Changlang","Daporijo","Deomali","Itanagar","Jairampur","Khonsa","Naharlagun","Namsai","Pasighat","Roing","Seppa","Tawang","Tezu","Ziro"],
    "Assam": [],
    "Assam": [],
    "Bihar": [],
    "Chhattisgarh": [],
    "Goa": [],
    "Gujarat": [],
    "Haryana": [],
    "Himachal Pradesh	": [],
    "Jharkhand": [],
    "Karnataka": [],
    "Kerala": [],
    "Madhya Pradesh	": [],
    "Maharashtra": [],
    "Manipur": [],
    "Meghalaya": [],
    "Mizoram": [],
    "Nagaland": [],
    "Odisha": [],
    "Punjab": [],
    "Rajasthan": [],
    "Sikkim": [],
    "Tamil Nadu	": [],
    "Telangana": [],
    "Tripura": [],
    "Uttar Pradesh	": [],
    "Uttarakhand": [],
    "West Bengal": [],


  },

}
window.onload = function() {
  var countySel = document.getElementById("countySel"),
    stateSel = document.getElementById("stateSel"),
    districtSel = document.getElementById("districtSel");
  for (var country in stateObject) {
    countySel.options[countySel.options.length] = new Option(country, country);
  }
  countySel.onchange = function() {
    stateSel.length = 1; // remove all options bar first
    districtSel.length = 1; // remove all options bar first
    if (this.selectedIndex < 1) return; // done
    for (var state in stateObject[this.value]) {
      stateSel.options[stateSel.options.length] = new Option(state, state);
    }
  }
  countySel.onchange(); // reset in case page is reloaded
  stateSel.onchange = function() {
    districtSel.length = 1; // remove all options bar first
    if (this.selectedIndex < 1) return; // done
    var district = stateObject[countySel.value][this.value];
    for (var i = 0; i < district.length; i++) {
      districtSel.options[districtSel.options.length] = new Option(district[i], district[i]);
    }
  }
}

            var countryLists = new Array(4) 
             countryLists["empty"] = ["เลือกนาที"]; 
             countryLists["10"] = ["เลือกนาที", "00 นาที", "05 นาที", "10 นาที", "15 นาที", "20 นาที", "25 นาที", "30 นาที", "35 นาที", "40 นาที", "45 นาที", "50 นาที", "55 นาที"] 
             countryLists["11"] = ["เลือกนาที", "00 นาที", "05 นาที", "10 นาที", "15 นาที", "20 นาที", "25 นาที", "30 นาที", "35 นาที", "40 นาที", "45 นาที", "50 นาที", "55 นาที"]
             countryLists["12"] = ["เลือกนาที", "00 นาที", "05 นาที", "10 นาที", "15 นาที", "20 นาที", "25 นาที", "30 นาที"]; 
             countryLists["13"] = ["เลือกนาที", "00 นาที", "05 นาที", "10 นาที", "15 นาที", "20 นาที", "25 นาที", "30 นาที", "35 นาที", "40 นาที", "45 นาที", "50 นาที", "55 นาที"]; 
             countryLists["14"] = ["เลือกนาที", "00 นาที", "05 นาที", "10 นาที", "15 นาที", "20 นาที", "25 นาที", "30 นาที", "35 นาที", "40 นาที", "45 นาที", "50 นาที", "55 นาที"]; 
             countryLists["15"] = ["เลือกนาที", "00 นาที", "05 นาที", "10 นาที", "15 นาที", "20 นาที", "25 นาที", "30 นาที", "35 นาที", "40 นาที", "45 นาที", "50 นาที", "55 นาที"]; 
             countryLists["16"] = ["เลือกนาที", "00 นาที", "05 นาที", "10 นาที", "15 นาที", "20 นาที", "25 นาที", "30 นาที"]; 
             countryLists["17"] = ["เลือกนาที", "00 นาที", "05 นาที", "10 นาที", "15 นาที", "20 นาที", "25 นาที", "30 นาที", "35 นาที", "40 นาที", "45 นาที", "50 นาที", "55 นาที"]; 
             countryLists["18"] = ["เลือกนาที", "00 นาที", "05 นาที", "10 นาที", "15 นาที", "20 นาที", "25 นาที", "30 นาที", "35 นาที", "40 นาที", "45 นาที", "50 นาที", "55 นาที"]; 
             countryLists["19"] = ["เลือกนาที", "00 นาที", "05 นาที", "10 นาที", "15 นาที", "20 นาที", "25 นาที", "30 นาที", "35 นาที", "40 นาที", "45 นาที", "50 นาที", "55 นาที"]; 

             function countryChange(selectObj) { 

             var idx = selectObj.selectedIndex; 
             var which = selectObj.options[idx].value; 
             cList = countryLists[which]; 
             var cSelect = document.getElementById("Minute"); 
             var len=cSelect.options.length; 
             while (cSelect.options.length > 0) { 
             cSelect.remove(0); 
             } 
             var newOption; 
             for (var i=0; i<cList.length; i++) { 
             newOption = document.createElement("option"); 
             newOption.value = cList[i];  
             newOption.text=cList[i]; 

             try { 
             cSelect.add(newOption);  
             } 
             catch (e) { 
             cSelect.appendChild(newOption); 
             } 
            } 
        } 
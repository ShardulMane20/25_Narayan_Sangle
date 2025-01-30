
    const stateData = {
      india: {
        states: {
          "Andhra Pradesh": ["Visakhapatnam", "Vijayawada", "Guntur", "Nellore", "Anantapur", "Chittoor", "East Godavari", "West Godavari", "Krishna", "Kurnool", "Prakasam", "Srikakulam", "YSR Kadapa", "Vizianagaram", "West Godavari"],
"Arunachal Pradesh": ["Itanagar", "Tawang", "Ziro", "Pasighat", "Bomdila", "Namsai", "Tezu", "Naharlagun", "Aalo", "Daporijo"],
"Assam": ["Guwahati", "Jorhat", "Dibrugarh", "Silchar", "Nagaon", "Barpeta", "Bongaigaon", "Tinsukia", "Karimganj", "Sivasagar", "Golaghat", "Kamrup", "Sonitpur", "Darrang"],
"Bihar": ["Patna", "Gaya", "Bhagalpur", "Muzaffarpur", "Munger", "Nalanda", "Darbhanga", "Begusarai", "Purnia", "Saran", "Siwan", "Chhapra", "Kishanganj", "Buxar"],
"Chhattisgarh": ["Raipur", "Bilaspur", "Durg", "Korba", "Raigarh", "Jagdalpur", "Kanker", "Surguja", "Janjgir-Champa", "Dhamtari", "Rajnandgaon", "Mahasamund"],
"Goa": ["Panaji", "Margao", "Vasco da Gama", "Mapusa", "Ponda", "Cortalim", "Quepem", "Sanguem"],
"Guajarat": ["Ahmedabad", "Surat", "Vadodara", "Rajkot", "Bhavnagar", "Jamnagar", "Gandhinagar", "Anand", "Navsari", "Valsad", "Kutch", "Porbandar"],
"Haryana": ["Chandigarh", "Gurgaon", "Faridabad", "Ambala", "Hisar", "Karnal", "Panipat", "Sonipat", "Rohtak", "Yamunanagar", "Bhiwani"],
"Himachal Pradesh": ["Shimla", "Manali", "Kullu", "Dharamshala", "Kangra", "Mandi", "Solan", "Bilaspur", "Hamirpur", "Chamba", "Una"],
"Jharkhand": ["Ranchi", "Jamshedpur", "Dhanbad", "Hazaribagh", "Bokaro", "Deoghar", "Giridih", "Dumka", "Ramgarh", "Koderma", "Pakur"],
"Karnataka": ["Bangalore", "Mysore", "Hubli", "Mangalore", "Belgaum", "Davanagere", "Shimoga", "Chikmagalur", "Tumkur", "Mandya", "Chitradurga", "Bagalkot", "Bijapur", "Gulbarga"],
"Kerala": ["Thiruvananthapuram", "Kochi", "Kozhikode", "Trichur", "Kollam", "Palakkad", "Malappuram", "Kannur", "Kottayam", "Idukki", "Wayanad"],
"Madhya Pradesh": ["Bhopal", "Indore", "Gwalior", "Jabalpur", "Ujjain", "Sagar", "Khandwa", "Mandsaur", "Rewa", "Satna", "Burhanpur", "Chhindwara", "Sehore", "Dewas"],
"Maharashtra": ["Ahmednagar", "Akola","Alibag", "Aurangabad","Beed","Bhandara","Buldhana","Chandrapur","Dhule","Gadchiroli","Gondia","Hingoli","Jalgaon","Jalna","Kolhapur","Latur","Mumbai City","Mumbai Suburban","Nagpur","Nanded","Nandurbar","Nashik","Osmanabad","Palghar","Parbhani","Pune","Raigad","Ratnagiri","Sangli","Satara","Sindhudurg","Solapur","Thane","Wardha","Washim", "Yavatmal"],
"Manipur": ["Imphal", "Thoubal", "Churachandpur", "Kakching", "Bishnupur", "Senapati", "Chandel", "Ukhrul", "Tamenglong"],
"Meghalaya": ["Shillong", "Tura", "Jowai", "Nongstoin", "Williamnagar", "Baghmara", "Mairang", "Nartiang", "Mawkyrwat"],
"Mizoram": ["Aizawl", "Lunglei", "Champhai", "Kolasib", "Serchhip", "Lawngtlai", "Hnahthial"],
"Nagaland": ["Kohima", "Dimapur", "Mokokchung", "Wokha", "Zunheboto", "Phek", "Tuensang", "Longleng"],
"Odisha": ["Bhubaneswar", "Cuttack", "Berhampur", "Rourkela", "Puri", "Sambalpur", "Koraput", "Balasore", "Angul", "Dhenkanal", "Nayagarh", "Khorda", "Jagatsinghpur"],
"Punjab": ["Chandigarh", "Ludhiana", "Amritsar", "Jalandhar", "Patiala", "Bathinda", "Pathankot", "Moga", "Rupnagar", "Fatehgarh Sahib", "Hoshiarpur"],
"Rajasthan": ["Jaipur", "Udaipur", "Jodhpur", "Kota", "Ajmer", "Bikaner", "Alwar", "Churu", "Nagaur", "Pali", "Sikar", "Jhunjhunu"],
"Sikkim": ["Gangtok", "Namchi", "Mangan", "Rangpo", "Jorethang", "Rangli", "Khamdong"],
"Tamil Nadu": ["Chennai", "Coimbatore", "Madurai", "Salem", "Tiruchirapalli", "Erode", "Vellore", "Tirunelveli", "Thanjavur", "Kanchipuram", "Cuddalore", "Dharmapuri"],
"Telangana": ["Hyderabad", "Warangal", "Khammam", "Nizamabad", "Karimnagar", "Mahabubnagar", "Rangareddy", "Medak", "Adilabad"],
"Tripura": ["Agartala", "Udaipur", "Dharmanagar", "Ambassa", "Belonia", "Kailashahar"],
"Uttar Pradesh": ["Lucknow", "Kanpur", "Varanasi", "Agra", "Allahabad", "Meerut", "Ghaziabad", "Bareilly", "Moradabad", "Noida", "Aligarh", "Rampur", "Mathura", "Firozabad"],
"Uttarakhand": ["Dehradun", "Haridwar", "Nainital", "Rishikesh", "Roorkee", "Pauri", "Almora", "Udham Singh Nagar", "Tehri Garhwal", "Champawat"],
"West Bengal": ["Kolkata", "Siliguri", "Durgapur", "Asansol", "Howrah", "Murshidabad", "Birbhum", "Nadia", "Hooghly", "Cooch Behar"],
"Delhi": ["New Delhi", "Dwarka", "Rohini", "Vikaspuri", "Karol Bagh", "Janakpuri", "Saket", "Kalkaji"],
"Jammu and Kashmir": ["Srinagar", "Jammu", "Anantnag", "Baramulla", "Budgam", "Pulwama", "Kathua", "Rajouri", "Poonch", "Kishtwar", "Doda"],
"Ladakh": ["Leh", "Kargil", "Nubra", "Zanskar"],
"Lakshadweep": ["Kavaratti", "Agatti", "Minicoy", "Andrott"],
"Puducherry": ["Puducherry", "Karaikal", "Mahe", "Yanam"]

        }
      }};

    function loadStates() {
      const country = document.getElementById('country').value;
      const stateSelect = document.getElementById('state');
      const districtSelect = document.getElementById('district');

      stateSelect.innerHTML = '<option value="" disabled selected>Select your state</option>';
      districtSelect.innerHTML = '<option value="" disabled selected>Select your district</option>';

      if (stateData[country]) {
        Object.keys(stateData[country].states).forEach(state => {
          const option = document.createElement('option');
          option.value = state.toLowerCase().replace(/\s/g, '');
          option.text = state;
          stateSelect.appendChild(option);
        });
      }
    }

    function loadDistricts() {
      const country = document.getElementById('country').value;
      const state = document.getElementById('state').value;
      const districtSelect = document.getElementById('district');

      districtSelect.innerHTML = '<option value="" disabled selected>Select your district</option>';

      if (stateData[country] && stateData[country].states) {
        const districts = stateData[country].states[Object.keys(stateData[country].states).find(s => s.toLowerCase().replace(/\s/g, '') === state)] || [];
        districts.forEach(district => {
          const option = document.createElement('option');
          option.value = district.toLowerCase().replace(/\s/g, '');
          option.text = district;
          districtSelect.appendChild(option);
        });
      }
    }

    
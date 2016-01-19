/**
 * 
 */

Ajax.makeRequest('POST', 'people.php', {getPeople:true}, true, callback);

function callback(people) {
	
	var peopleList = document.getElementById('peopleList');
	
	people = JSON.parse(people.responseText);
	
	for(var i = 0; i < people.length ; i++){
		
		var person = document.createElement('LI');
		var image = document.createElement('IMG');
		var information = document.createElement('DIV');
		information.className = "personInformation";
		
		person.innerHTML = 'Name: ' + people[i].name ;
		image.src = people[i].image;
		
		person.setAttribute('personName' , people[i].name);
		person.setAttribute('personName' , people[i].name);
		
		
		person.onclick = function(data) {
			Ajax.makeRequest('POST', 'people.php', {getPeople:true , personName:this.getAttribute('personName')}, true, function(moreInformation) {
				document.querySelector('div[personName = '+this.getAttribute('personName')+ ']').innerHTML = moreInformation.responseText;
			});
			
		}
		
		
		
		peopleList.appendChild(person);
		peopleList.appendChild(image);
		peopleList.appendChild(information);
		
	}	
	
}



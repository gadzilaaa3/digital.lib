function getResource(path) {
	$.ajax({
		url: 'https://cloud-api.yandex.net/v1/disk/resources',
		method: 'get',
		dataType: 'json',
		data: { 'path': path, 'sort': 'type' },
		headers: { 'Authorization': 'OAuth y0_AgAAAAA4LQGfAADLWwAAAADUFdAAPMbySIrlSreBza-Bd_Ua2eILbYE' },
		success: function (data) {
			createDivision(data);
		}
	});
}

function createDivision(data) {

	var content = document.getElementById('content');
	content.innerHTML = "";

	var items = data._embedded.items;

	items.forEach(element => {
		card = createCard(element);
		content.append(card);
	});
}

function createCard(item) {

	var card = document.createElement('div');
	card.className = "card m-3";
	card.style.width = "200px";

	var img = createImage();
	card.append(img);

	var cardBody = createCardBody(item.name);
	card.append(cardBody);

	var ul = createUl(item.type, item.path);
	card.append(ul);

	if (item.type === "file") {
		var link = createLink(item.public_url);
		card.append(link);
	} else {
		var button = document.createElement('button');
		button.type = "button";
		button.className = "btn btn-primary";
		button.onclick = function () {
			getResource(item.path);
		}
		button.innerText = "Открыть";

		card.append(button);
	}

	return card;
}

function createCardBody(itemTitle) {
	var cardBody = document.createElement('div');
	cardBody.className = "card-body";

	var title = document.createElement('h5');
	title.className = "card-title";
	var titleText = document.createTextNode(itemTitle);
	title.append(titleText);

	cardBody.append(title);

	return cardBody;
}

function createImage() {
	var img = document.createElement('img');
	img.src = "https://mdbcdn.b-cdn.net/img/new/standard/city/062.webp";
	img.class = "card-img-top";

	return img;
}

function createUl(type, path) {
	var ul = document.createElement('ul');
	ul.className = "list-group list-group-light list-group-small";

	var li = document.createElement('li');
	li.className = "list-group-item px-4";
	var textType = document.createTextNode("Type: " + type);
	li.append(textType);
	ul.append(li);

	li = document.createElement('li');
	li.className = "list-group-item px-4";
	var textPath = document.createTextNode("Path: " + path);
	li.append(textPath);
	ul.append(li);

	return ul;
}

function createLink(link) {
	var cardBody = document.createElement('div');
	cardBody.className = "card-body";

	var a = document.createElement('a');
	a.className = "card-link";
	a.href = link;

	var linkText = document.createTextNode("Перейти");
	a.append(linkText);

	cardBody.append(a);

	return cardBody;
}

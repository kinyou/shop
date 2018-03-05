function searchProduct(name) {
    var formObj = document.getElementById(name);

    var  name = document.getElementById('search_product').value;

    if (!name) {
        document.getElementById('warning').style.display = 'block';
        return false;
    }

    var inputNode = document.createElement('input');
    inputNode.setAttribute('type','text');
    inputNode.setAttribute('name','name');
    inputNode.setAttribute('value',name);
    inputNode.setAttribute('hidden','hidden');
    formObj.appendChild(inputNode);

    formObj.submit();
}
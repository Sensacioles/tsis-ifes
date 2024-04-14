function addTarefa(){
    var listaTasks = document.getElementById("lista");
    var novaTask = document.getElementById("novaTarefa");
    var itemTask = document.createElement("li");
    var textoItem = document.createTextNode(novaTask.value);
    
    itemTask.appendChild(textoItem);
    itemTask.onclick = function(){completeTarefa(itemTask)};
    
    var removeTask = document.createElement("button");
    removeTask.textContent = "Remover tarefa";
    removeTask.onclick = function(){deleteTarefa(itemTask)};
    itemTask.appendChild(removeTask);

    listaTasks.appendChild(itemTask);
}
function completeTarefa(task){
    task.classList.toggle("completa");
}
function deleteTarefa(task){
    task.parentNode.removeChild(task);
}
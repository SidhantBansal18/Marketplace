class ButtonsNavigation{

    static buttonClick(button_id){
        console.log(button_id)
        document.location.href = button_id + '.php';
    }
}
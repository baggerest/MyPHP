function changed(select) {
    var num = select.selectedIndex
    var option = select.options[select.selectedIndex].text
    alert(num+" : "+option)
}
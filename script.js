function changed(theselect) {
    var output=""
    var id = theselect.selectedIndex
    var thename = theselect.name
    var num_options = theselect.length
    output += "selectedIndex = " + id + "\n"
    output += "Your " + thename + " is " + theselect.options[id].text
    alert(output)
}
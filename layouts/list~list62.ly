beginblock top
	begincontainer horizontal  style=empty master
 		brick masterinfo
	endcontainer	

    begincontainer horizontal  style=2 width=100% toplinks
		brick left loggedas
    endcontainer
	begincontainer horizontal bmargin=0 style=hmenu width=100% hmenu
		brick hmenu
	endcontainer

	
	begincontainer horizontal style=2 width=100% recordcontrols
        brick left recordcontrols_new
	brick left recordcontrol
    endcontainer 
endblock 


beginblock center    
    
    begincontainer grid delimx=10 delimy=10 style=grid grid
        brick grid
    endcontainer 
    begincontainer horizontal style=2 width=100% pagination
        brick center pagination
    endcontainer
endblock

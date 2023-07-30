import { Component } from '@angular/core';
import {FormGroup,FormControl} from '@angular/forms'
@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.css']
})
export class RegisterComponent {
    register = new FormGroup({
      name: new FormControl(""),
      email:new FormControl(""),
      password: new FormControl("")
    })


    registerProfile(){
      console.log(this.register.value)
    }
}

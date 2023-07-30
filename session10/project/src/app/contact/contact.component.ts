import { Component } from '@angular/core';
import {FormControl,FormGroup} from '@angular/forms'
@Component({
  selector: 'app-contact',
  templateUrl: './contact.component.html',
  styleUrls: ['./contact.component.css']
})
export class ContactComponent {
    login = new FormGroup({
      email : new FormControl(""),
      password: new FormControl("")
    })


    loginUser(){
        console.log(this.login.value)
    }
}

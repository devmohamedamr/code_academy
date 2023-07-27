import { Component } from '@angular/core';
import { LoggerService } from '../Service/logger.service';
@Component({
  selector: 'app-contact',
  templateUrl: './contact.component.html',
  styleUrls: ['./contact.component.css']
})
export class ContactComponent {
  constructor(public x:LoggerService){
    x.calc(1,1)
  }
}

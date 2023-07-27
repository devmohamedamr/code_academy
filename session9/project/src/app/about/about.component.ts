import { Component } from '@angular/core';
import { LoggerService } from '../Service/logger.service';
@Component({
  selector: 'app-about',
  templateUrl: './about.component.html',
  styleUrls: ['./about.component.css']
})
export class AboutComponent {
  constructor(public log:LoggerService){
    log.sayhi()
  }
}

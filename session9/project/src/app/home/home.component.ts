import { Component } from '@angular/core';
import { LoggerService } from '../Service/logger.service';
@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent {
    constructor(public x:LoggerService){
        x.sayhi()
        x.calc(20,10);
    }
    count:number = 0;

    increment = ()=>{
        ++this.count
    }


    // increment(){
    //     console.log("tets")
    //     // ++this.count
    // }
}

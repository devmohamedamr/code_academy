import { Component } from '@angular/core';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent {
    name:string = "mohamed amr";
    colors:Array<string> =[
        "red",
        "green",
        "blue",
        "yellow"
    ]
}

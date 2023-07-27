import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class LoggerService {

  constructor() { }

  sayhi = ()=>{
    console.log("hi")
  }

  calc = (x:number,y:number)=>{
    console.log(x + y)
  }
}

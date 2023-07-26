class person {
    eat(){
        console.log("eat")
    }
}
class user extends person{

}
let u = new user()
u.eat()
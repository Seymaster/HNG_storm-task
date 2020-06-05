class MyInfo{
    constructor(){
        this.firstName= 'Mohammad',
        this.lastName= 'Allam',
        this.id ='HNG-02733',
        this.langauge= 'JavaScript',
        this.emailAddress='uodeeb@gmail.com',
        this.message = `Hello World, this is [${this.firstName}] [${this.lastName}] with HNGi7 ID [${this.id}] using [${this.langauge}] for stage 2 task. ${this.emailAddress}`  
    }
}
const mohammadInfo = new MyInfo();
console.log(mohammadInfo.message);
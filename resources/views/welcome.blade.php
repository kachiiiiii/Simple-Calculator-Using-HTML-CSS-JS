<!doctype html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
</head>

<body>

    <p id="kachi">Welcome</p>
    <button onclick="myFunction(x)" class="font-bold text-xl text-red-700">CLICK ME</button>
    <button onclick="port()" class="font-bold text-xl text-red-700">CLICK ME</button>
    <div class="text-center">
        <label for="password" class="block  text-2xl font-bold p-3">Password</label>
        <input type="text" name="password" id="password" placeholder="Password" type="password" value="password"
            class="border rounded-full border-black px-20 py-7">
    </div>
    <button class="block font-extrabold text-2xl p-3 w-[60%] mx-auto text-pink-500"
        onclick="password.type='text'">Click</button>

    <button class="block font-extrabold text-2xl p-3 w-[60%] mx-auto text-yellow-400"
        onclick="password.value='Enter Username'">Click</button><i class="fas fa-eye "></i><i
        class="fas fa-eye  text-pink-500"></i>
    <marquee behavior="" direction="vertical" class="text-orange-600 italic text-9xl p-32 bg-gray-600">Javascript is
        <span class="text-green-500">awesome.....</span>
    </marquee>
    <script>
        // let x = 5; 
        // let y = 10;
        // let z = x + y;
        // document.getElementById('kachi').innerHTML = z + '<br>';
        //  var x
        // document.write(x)
        //  var y = 50, x = 25, z = y + x;
        // var z = 50 + z;
        // document.write(z);
        // var x = 19;
        //  var y = 3;
        // var z = x % y;
        // document.write(z)
        // var x = 19;
        //   var y = 3;
        //   var z = x ** y;
        //   document.write(z)
        // var x = 5;
        //    x+=x;
        //   document.write(x);
        // var Firstname = 'kachi';
        // var Lastname = 'Dimaka';
        // var FullName = Firstname + ' ' + Lastname;
        // document.write(FullName);
        // var Firstname = 'kachi';
        // var Lastname = 'Dimaka';
        // var FullName = Firstname + ' ' + Lastname;
        //  document.write(FullName);

        // var x = 78;
        // var y = 7;
        // var z = x % y;
        // document.write(z);

        // identify
        // var x = 45;
        // document.write(x);
        //  var FirstName = 'Kachi'; 
        //  var LastName = 'Dimaka';
        // var FullName = FirstName + ' ' + LastName;
        //  document.write(FullName + '<br>');
        //  var FirstName = 'Kachi'; 
        //  var LastName = 'Dimaka';
        // var FullName = FirstName + ' ' + LastName;
        //  document.write(FullName + '</br>');
        //  var age = 50;
        //  var name = 'Kachi'; 
        //  document.write(typeof age  + " " +'</br>' + typeof name + '</br>');
        //  var x = 5;
        //  var y = 16;
        //  var z = x+y;
        //  document.write(z + '</br>');
        //  var a = '5';
        //  var b = '16';
        //   var c = a+b;
        //   document.write(c + '</br>');
        //   comparism
        // var x = 15;
        // if(x != 15) {
        //     document.write('JS' +'</br>');
        //     }
        //     else
        // {
        // document.write('BO' +'</br>');
        // } 
        // document.write(x===a + '</br>');
        // document.write(x>16 + );
        // document.write(x>5?"5 is small":
        // "5 is big");
        // var x = 13/2*7+4-11;
        // document.write(x);

        // var age =[
        //   10, 15, 12, 14, 20, 21, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20,
        // ];
        // document.write(age[4]);

        document.getElementById('kachi').style.backgroundColor = 'green';
        var ben = {
            name: 'Kachi',
            age: 50,
            Phone: '0812568733',
            address: 'ph',
        };
        document.write(ben.name + ' ' + '</br>' + ben.age + ' ' + '</br>' + ben.Phone + ' ' + '</br>' + ben.address);
        // var x = myFunction(4, 3);

        // function myFunction(a, b) {
        //     var x = a * b;
        //     document.getElementById('kachi').innerHTML = x;
        //     return x;
        // }
        //         var x = 33;
        //           document.write(x);
        // function port(){
        //   var x = 20;
        //   document.write(x);
        // }
        var person = {
            FirstName: 'Jane',
            LastName: 'Juliet',
            Age: 44,
            Phone: '123456789',
            FullName: function() {
                return this.FirstName + ' ' + this.LastName;
            }
        }
        document.write(person.FullName());
    </script>

    <div class="bg-black w-[20%] mx-auto rounded-2xl my-5 py-16">
        <div class="bg-gray-900 py-20 text-white text-right -mt-16 rounded-2xl font-bold text-2xl p-2">
          <input type="text" name="clock" id="clock"  class="text-left p-10 block rounded mx-auto font-bold text-orange-600 ">
        </div>
        <div class="grid grid-cols-4 grid-rows-5 p-4">
            <button class="font-bold text-xl text-white m-3 bg-slate-600 rounded-full w-[50px] h-[50px]" onclick="clock.value=''">AC</button>
            <button class="font-bold text-xl text-white m-3 bg-slate-600 rounded-full w-[50px] h-[50px]" onclick="clock.value=clock.value.toString().slice(0,-1)">DEL</button>
            <button class="font-bold text-2xl p-2 m-3 text-white bg-slate-600 rounded-full w-[50px] h-[50px]" onclick="clock.value=clock.value/100">%</button>
            <button class="font-bold text-2xl p-2 m-3 text-white bg-orange-600 rounded-full w-[50px] h-[50px]" onclick="clock.value+='/'">/</button>
            <button class="font-bold text-2xl p-2 m-3 text-white bg-slate-600 rounded-full w-[50px] h-[50px]" onclick="clock.value+='7'">7</button>
            <button class="font-bold text-2xl p-2 m-3 text-white bg-slate-600 rounded-full w-[50px] h-[50px]" onclick="clock.value+='8'">8</button>
            <button class="font-bold text-2xl p-2 m-3 text-white bg-slate-600 rounded-full w-[50px] h-[50px]" onclick="clock.value+='9'">9</button>
            <button class="font-bold text-2xl p-2 m-3 text-white bg-orange-600 rounded-full w-[50px] h-[50px]" onclick="clock.value+='*'">*</button>
            <button class="font-bold text-2xl p-2 m-3 text-white bg-slate-600 rounded-full w-[50px] h-[50px]" onclick="clock.value+='4'">4</button>
            <button class="font-bold text-2xl p-2 m-3 text-white bg-slate-600 rounded-full w-[50px] h-[50px]" onclick="clock.value+='5'">5</button>
            <button class="font-bold text-2xl p-2 m-3 text-white bg-slate-600 rounded-full w-[50px] h-[50px]" onclick="clock.value+='6'">6</button>
            <button
                class="font-bold text-2xl p-2 m-3 text-white bg-orange-600 rounded-full w-[50px] h-[50px]" onclick="clock.value+='+'">+</button>
            <button class="font-bold text-2xl p-2 m-3 text-white bg-slate-600 rounded-full w-[50px] h-[50px]" onclick="clock.value+='1'">1</button>
            <button class="font-bold text-2xl p-2 m-3 text-white bg-slate-600 rounded-full w-[50px] h-[50px]" onclick="clock.value+='2'">2</button>
            <button class="font-bold text-2xl p-2 m-3 text-white bg-slate-600 rounded-full w-[50px] h-[50px]" onclick="clock.value+='3'">3</button>
            <button class="font-bold text-2xl p-2 m-3 text-white bg-orange-600 rounded-full w-[50px] h-[50px]" onclick="clock.value+='-'">-</button>
            <button class="font-bold text-2xl p-2 m-3 text-white bg-slate-600 rounded-full w-[90px] h-[50px] text-left" onclick="clock.value+='0'">0</button>
            <button class="font-bold text-2xl p-2 m-3 text-white bg-slate-600 rounded-full w-[50px] h-[50px] ml-20" onclick="clock.value+='.'">.</button>
            <button class="font-bold text-2xl p-2 m-3 text-white bg-orange-600 rounded-full w-[50px] h-[50px] ml-20" onclick="clock.value=eval(clock.value)">=</button>


        </div>
    </div>

</body>

</html>

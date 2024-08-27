import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';

class HomePage extends StatelessWidget {
  const HomePage({super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: const Color(0xff252734),
      body: Padding(
        padding: const EdgeInsets.symmetric(horizontal: 32,vertical: 32),
        child: Container(
          child: Column(
            children: [
              Row(
                mainAxisAlignment:MainAxisAlignment.values[2],
                children: [
                  InkWell(child: Container(
                    height: 100,
                    width: 100,
                    child: const Text('Home',style: TextStyle(color: Color(0xff858792)),),
                  ),
                    onHover: (value) {
                    if(value) {}
                    },
                  ),
                  InkWell(child: Container(
                    height: 100,
                    width: 100,
                    child: const Text('Service',style: TextStyle(color: Color(0xff858792)),),
                  ),
                    onHover: (value) {
                      if(value) {}
                    },
                  ),
                  InkWell(child: Container(
                    height: 100,
                    width: 100,
                    child: const Text('Blog',style: TextStyle(color: Color(0xff858792)),),
                  ),
                    onHover: (value) {
                      if(value) {}
                    },
                  )
          ,
                  InkWell(child: Container(
                    height: 100,
                    width: 100,
                    child: const Text('Pages',style: TextStyle(color: Color(0xff858792)),),
                  ),
                    onHover: (value) {
                      if(value) {}
                    },
                  )
          ,
                  InkWell(child: Container(
                    height: 100,
                    width: 100,
                    child: const Text('Contact',style: TextStyle(color: Color(0xff858792)),),
                  ),
                    onHover: (value) {
                      if(value) {}
                    },
                  ),
                   ElevatedButton(
                      onPressed: () {
                    
                  }, child:Text('data'))

                ],
              )
            ],
          ),
        ),
      ),
    );
  }
}

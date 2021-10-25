
<from>
<fieldset class="container border p-5">
	<legend class="w-auto">New Game List</legend>
    
    <div>
        <div>
            <ul>
                    <table>
                    
                    <h6 style="font-size:120%;">RPG(角色扮演),MMORPG(大型多人在线角色扮演游戏),RTS(即时战略)</h6>
                    @foreach($typeRPG as $gametypeRPG)
                            <th>
                                 <a href="/Game/{{$gametypeRPG->productid}}" target="_blank"><img src="{{ asset('image/') }}/{{$gametypeRPG->image}}" width="200" height="130"></a>
                                 <p><a href="/Game/{{$gametypeRPG->productid}}" target="_blank">{{$gametypeRPG->productname}}</a></p>
                            </th>   
                    @endforeach   
                    </table>
                    <table>
                    <h6 style="font-size:120%;">STG(射击),FPS(第一人称射击游戏),TPS(第三人称射击游戏）</h6>
                    @foreach($typeFPS as $gametypeFPS)
                            <th>
                                 <a href="/Game/{{$gametypeFPS->productid}}" target="_blank"><img src="{{ asset('image/') }}/{{$gametypeFPS->image}}" width="200" height="130"></a>
                                 <p><a href="/Game/{{$gametypeFPS->productid}}" target="_blank">{{$gametypeFPS->productname}}</a></p>
                            </th>
                    @endforeach
                    <table>
                    <h6 style="font-size:120%;">ACT(动作),RCG(赛车),FTG(格斗),VR(虚拟现实)</h6>
                    @foreach($typeotc as $gameotc)
                            <th>
                                 <a href="/Game/{{$gameotc->productid}}" target="_blank"><img src="{{ asset('image/') }}/{{$gameotc->image}}" width="200" height="130"></a>
                                 <p><a href="/Game/{{$gameotc->productid}}" target="_blank">{{$gameotc->productname}}</a></p>
                            </th>
                    @endforeach
                    </table>
            </ul>
        </div>
    </div>
</fieldset>
</from>

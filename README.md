# ` CppVa `팀 해커톤 주제

## 팀명

CppVa

## 시작하는 방법

1. 저희 GitHub에서 fork 한 후 codespace를 생성한다.
   
2. Azure로 웹 앱 만들기를 눌러줍니다.
![image](https://github.com/hackersground-kr/cppva/assets/74394824/fe6f9812-ce7d-4d23-a578-0506cdcb4d8d)

![image](https://github.com/hackersground-kr/cppva/assets/74394824/ff1f38b1-ea1f-4e19-ae12-d2aaa5bc2aad)

3. 리소스의 그룹 이름을 만들어 주는데 이때 영숫자 문자와 하이픈만 허용하고 하이픈으로 시작하거나 끝날 수 없으며 64자 미만이어야 합니다.

4. 게시에서 코드를 선택해주시고 런타임 스택은 ASP.NET V3.5로 합니다.

5. 운영체제의 경우 Windows로 선택해주시고 지역은 Korea Central로 설정해 줍니다.

6. 가격 책정 플랜에서 새로 만들기를 누른 후 자신이 원하는 이름을 입력한 후 App Service 요금제를 만들어 줍니다. 

   ![image](https://github.com/hackersground-kr/cppva/assets/74394824/dd30bdc0-f64a-4995-96b2-072cdd9b3478)
   ![image](https://github.com/hackersground-kr/cppva/assets/74394824/3839a90c-3017-41c4-ad1f-dfd0aeb64ea5)

7. 확인을 눌러 주신 후 표준 S1을 선택해줍니다.

8. 다음을 눌러줍니다.

![image](https://github.com/hackersground-kr/cppva/assets/74394824/a5b485c4-876d-48ec-8def-648551132f9e)

9. GitHub Actions 설정에서 지속적인 배포를 사용으로 눌러줍니다.

10. GitHub Actions 세부 정보에서 GitHub계정을 입력해주시고 자신의 조직과 codespace를 생성한
    리포지토리를 설정해 준다.

 ![image](https://github.com/hackersground-kr/cppva/assets/74394824/d0794e0b-35f5-4779-b402-c61df084f428)
11. 다음을 누른후 네트워킹에서 공용 액세스 사용은 켜고 네트워크 삽입 사용은 끈다.

 ![image](https://github.com/hackersground-kr/cppva/assets/74394824/df51e27e-6193-43dc-af77-1db21967f3ca)
12. 다음을 누르고 모니터링에서 Application Insights 사용을 아니요를 눌러준다.

13. 태그를 비우고 검토 + 만들기를 눌러 웹앱을 생성해 준다.

14. 그 후 codespace 터미널에서 git pull을 해준다.

15.  pull을 통해 새로 생성한 yml파일을 git add .을 해준다.
  
16. 그 후 터미널에서 git commit -m "ex"을 해준다.

17. 그 후 터미널에서 git push를 해준다.
   
18. 그 후 리포지토리_이름/.github/workflows/ 생성된 main_webcppva.yml파일을 연다.
 
19. yml파일이 생성되면 아래 코드들이 존재한다.

- name: Setup MSBuild path
        uses: microsoft/setup-msbuild@v1.0.2

      - name: Setup NuGet
        uses: NuGet/setup-nuget@v1.0.5

      - name: Restore NuGet packages
        run: nuget restore

      - name: Publish to folder
        run: msbuild /nologo /verbosity:m /t:Build /t:pipelinePreDeployCopyAllFilesToOneFolder /p:_PackageTempDir="\published\"

이 부분을 삭제 해준다. (이렇게 수정해 준다. 위 코드는 정적 웹으로만 구성된 코드여서 동적인 부분을 받는 코드는 다 삭제한 코드이다.)

20. 그 후 '/published/**'  이것을 -> '코드가 존재하는 파일의 이름/**' 으로 바꿔준다.

21. 고친 yml파일을 git add .을 해준다.
  
22. 그 후 터미널에서 git commit -m "ex1"을 해준다.

23. 위 수정한 코드들을 git push 해준 후 만들어준 웹앱의 기본 도메인으로 사이트를 접속한다.

24. 이때 크리덴셜 오류가 뜰 수 있다. 이는 크리덴셜 키가 없어서 그런것이다.

25.  Azure에서 크리덴셜 키를 생성하는 방법은 다음과 같다.

26. Azure Portal에 로그인합니다.

27. 왼쪽 상단의 검색 상자에서 "액세스 키"를 검색하거나, 리소스 그룹 또는 서비스에 따라 다른 리소스를 선택한 후 "액세스 키"를 클릭합니다.

28. 액세스 키 페이지에서 "키 추가"를 클릭합니다.

29. 키 이름을 지정하고 "저장"을 클릭합니다. Azure는 키 값을 자동으로 생성하여 제공합니다.

30. 생성된 키 값은 "값" 열에 표시됩니다. 이 값을 안전한 곳에 보관하거나 필요한 곳에 사용할 수 있습니다.

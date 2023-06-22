# ` CppVa `팀 해커톤 주제

## 팀명

CppVa

## 시작하는 방법

App Services를 통해 웹앱을 만든다. 

구독 - Hackers Ground
리소스 그룹 rg-hg-Team-CppVa

<이름>을 정한다

<게시>에 코드를 누른다

<런타임 스택 선택>- ASP.NET  V3.5

<운영 체제>Windows

<지역>-Korea Central

<Windows 플랜>

다음 누르기

GitHub Actions 사용

조직 - hackersground-kr
리포지토리를 정해준다.

나머지는 다 다음을 눌러준다

그리고 웹앱을 생성해 준다.

그 후 GitHub에 생성된 yml파일을 

- name: Setup MSBuild path
        uses: microsoft/setup-msbuild@v1.0.2

      - name: Setup NuGet
        uses: NuGet/setup-nuget@v1.0.5

      - name: Restore NuGet packages
        run: nuget restore

      - name: Publish to folder
        run: msbuild /nologo /verbosity:m /t:Build /t:pipelinePreDeployCopyAllFilesToOneFolder /p:_PackageTempDir="\published\"

이 부분을 삭제 해준다.

그 후 

 '/published/**'  이것을 -> '코드가 존재하는 파일의 이름/**' 으로 바꿔준다.

이렇게 수정해 준다. 위 코드는 정적 웹으로만 구성된 코드여서 동적인 부분을 받는 코드는 다 삭제한 코드이다.

 그 후 commit 해준 후 사이트를 실행한다.

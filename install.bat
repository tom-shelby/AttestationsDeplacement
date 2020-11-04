@TITLE Installation de l'application et de ses dependances...
 
@echo Renommage du fichier .env.example en fichier .env [exploitable par l'application]
@TIMEOUT 6
@REN ".env.example"  ".envv"
@CLS

@echo Generation d'une clef d'application qui vous est propre
@TIMEOUT 6
@php artisan key:generate
@CLS

@echo Installation des dependances composer. [composer doit etre installe et dans la variable PATH]
@TIMEOUT 6
@composer install
@CLS